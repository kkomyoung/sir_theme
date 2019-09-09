<?php

include_once(G5_LIB_PATH . '/thumbnail.lib.php');
add_stylesheet("<link rel=\"stylesheet\" href=\"{$board_skin_url}/style.css\" />", 0);
add_javascript("<script src=\"{$board_skin_url}/script.js\"></script>", 0);

?>

<section id="list-skin" style="<?php if($member['mb_level'] >= $board['bo_list_level'] && $board['bo_use_list_view'] && $wr_id) echo 'margin-top: 50px;'; ?>">

	<?php if($is_category){ ?>
	<ul>
		<li class="<?php if($sca == '') echo 'on'; ?>">
			<a href="<?php echo "board.php?bo_table={$bo_table}"; ?>">전체</a>
		</li>
		<?php foreach(explode('|', $board['bo_category_list']) as $val){ ?>
		<li class="<?php if($sca == $val) echo 'on'; ?>">
			<a href="<?php echo "board.php?bo_table={$bo_table}&sca=" . urlencode($val); ?>"><?php echo $val; ?></a>
		</li>
		<?php } ?>
	</ul>
	<?php } ?>

	<h1>
		전체 <?php echo number_format($total_count); ?>건
		(현재 <?php echo $page; ?>페이지)
		<?php if($admin_href){ ?>
		<a href="<?php echo $admin_href; ?>">
			<i class="fa fa-cog fa-2x"></i>
		</a>
		<?php } ?>
		<?php if($rss_href){ ?>
		<a href="<?php echo $rss_href; ?>">
			<i class="fa fa-rss fa-2x"></i>
		</a>
		<?php } ?>
	</h1>

	<form name="flist" method="post" action="<?php echo G5_BBS_URL; ?>/board_list_update.php">

		<table>
			<thead>
				<tr>
					<?php if($is_checkbox){ ?>
					<th class="checkbox">
						<input type="checkbox" name="btn_select" data-checked="false" />
					</th>
					<?php } ?>
					<th class="number">번호</th>
					<?php if($is_category){ ?>
					<th class="category">분류</th>
					<?php } ?>
					<th class="subject">제목</th>
					<th class="name">이름</th>
					<th class="datetime">일자</th>
					<th class="hit">조회</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($list as $rows){ ?>
				<tr class="<?php if($rows['is_notice']) echo 'notice'; ?>">
					<?php if($is_checkbox){ ?>
					<td class="checkbox">
						<input type="checkbox" name="chk_wr_id[]" value="<?php echo $rows['wr_id']; ?>" />
					</td>
					<?php } ?>
					<td class="number">
						<?php
						if($rows['is_notice']){
							echo '<strong>공지</strong>';
						} else{
							echo $rows['num'];
						}
						?>
					</td>
					<?php if($is_category){ ?>
					<td class="category">
						<?php if($rows['ca_name']){ ?>
						<a href="<?php echo $rows['ca_name_href']; ?>"><?php echo $rows['ca_name']; ?></a>
						<?php } ?>
					</td>
					<?php } ?>
					<td class="subject">
						<?
						$thumb = get_list_thumbnail($bo_table, $rows['wr_id'], $board['bo_gallery_width'], $board['bo_gallery_height'], false, true);
						if($thumb['src']){
							echo "<img src=\"{$thumb['src']}\" />";
						}
						?>
						<?php if($rows['icon_reply']){ ?>
						<strong>&#8627;</strong>
						<?php } ?>
						<a href="<?php echo $rows['href']; ?>">
							<?php if($rows['is_notice']){ ?>
							<i class="fa fa-volume-off fa-lg"></i>
							<?php } ?>
							<?php echo $rows['subject']; ?>
						</a>
						<?php if($rows['wr_comment']){ ?>
						<span>
							<i class="fa fa-comment"></i>
							<?php echo number_format($rows['wr_comment']); ?>
						</span>
						<?php } ?>
					</td>
					<td class="name">
						<?php echo $rows['name']; ?>
					</td>
					<td class="datetime">
						<?php
						if(substr($rows['wr_datetime'], 0, 10) == G5_TIME_YMD){
							echo substr($rows['wr_datetime'], 11, 8);
						} else{
							echo substr($rows['wr_datetime'], 0, 10);
						}
						?>
					</td>
					<td class="hit">
						<?php echo number_format($rows['wr_hit']); ?>
					</td>
				</tr>
				<?php } ?>
				<?php if(count($list) == 0){ ?>
				<tr>
					<td colspan="10" class="empty">
						게시글이 없습니다
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>

		<div>
			<?php if($is_checkbox){ ?>
			<p class="left">
				<button type="button" value="선택복사" class="submit">선택복사</button>
				<button type="button" value="선택이동" class="submit">선택이동</button>
				<button type="button" value="선택삭제" class="submit">선택삭제</button>
				<input type="hidden" name="btn_submit" value="선택삭제" />
				<input type="hidden" name="bo_table" value="<?php echo $bo_table; ?>" />
				<input type="hidden" name="sfl" value="<?php echo $sfl; ?>" />
				<input type="hidden" name="stx" value="<?php echo $stx; ?>" />
				<input type="hidden" name="spt" value="<?php echo $spt; ?>" />
				<input type="hidden" name="sst" value="<?php echo $sst; ?>" />
				<input type="hidden" name="sod" value="<?php echo $sod; ?>" />
				<input type="hidden" name="page" value="<?php echo $page; ?>" />
				<input type="hidden" name="sw" value="" />
			</p>
			<?php } ?>
			<?php if($write_href){ ?>
			<p class="right">
				<a href="<?php echo $write_href; ?>">작성하기</a>
			</p>
			<?php } ?>
		</div>

	</form>

	<?php echo $write_pages; ?>

	<form method="get">
		<p>
			<select name="sfl">
				<option value="wr_subject" <?php echo get_selected($sfl, 'wr_subject', true); ?>>제목</option>
				<option value="wr_content" <?php echo get_selected($sfl, 'wr_content'); ?>>내용</option>
				<option value="wr_subject||wr_content" <?php echo get_selected($sfl, 'wr_subject||wr_content'); ?>>제목+내용</option>
				<option value="wr_name,1" <?php echo get_selected($sfl, 'wr_name,1'); ?>>이름</option>
				<option value="mb_id,1" <?php echo get_selected($sfl, 'mb_id,1'); ?>>아이디</option>
			</select>
			<input type="text" name="stx" value="<?php echo stripslashes($stx); ?>" placeholder="검색어" class="required" />
			<button type="submit">
				<i class="fa fa-search fa-2x"></i>
			</button>
			<input type="hidden" name="bo_table" value="<?php echo $bo_table; ?>" />
			<input type="hidden" name="sca" value="<?php echo $sca; ?>" />
			<input type="hidden" name="sop" value="and" />
		</p>
	</form>

</section>