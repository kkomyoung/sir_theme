<?php
include_once('./_common.php');
include_once(G5_EDITOR_LIB);
include_once(G5_CAPTCHA_PATH.'/captcha.lib.php');
?>

  <style type="text/css">
  .field { height:19px; font-family:돋움; font-size:11px; padding:1px 1px 1px 1px; margin-top:1px; border:1px solid #eaeaea;}
  .ddd {
	  color: #666;
  }
  body {
	  background-color: #fff;
  }
  </style>
  <div style="padding:0px;">
  <form name="fwrite" method="post" onSubmit="return submitChk(this)"; style="margin:0px;">
  <input type="hidden" name="sca" value="<?=$sca?>">
  <input type="hidden" name="w" value="<?=$w ?>">
  <input type="hidden" name="bo_table" value="<?=$bo_table ?>">
  <input type="hidden" name="wr_id" value="<?=$wr_id ?>">
  <input type="hidden" name="sfl" value="<?=$sfl ?>">
  <input type="hidden" name="stx" value="<?=$stx ?>">
  <input type="hidden" name="spt" value="<?=$spt ?>">
  <input type="hidden" name="sst" value="<?=$sst ?>">
  <input type="hidden" name="sod" value="<?=$sod ?>">
  <input type="hidden" name="page" value="<?=$page ?>">
  <input type="hidden" name="wr_id" value="<?=$category_option ?>">
  <img src="img/bar.png" width="263" height="45" />
  

  <table background="img/bg.png" border="0" cellpadding="0" cellspacing="0">
    
    
    <tr>
		  
      <tr>
            <td width="246" height="25" class="ddd"style="padding-left: 10px; font-weight: bold;">견적상황</td>
			<td><input name="wr_10" type="radio" id="wr_10" value="견적접수" checked="checked" <?php if($write['wr_10']=="견적접수") echo "checked";?>>견적접수
		</td>
      </tr>
    
    </td>
    
    
    
     <tr>
     
	    <td width="246" height="28" class="ddd"style="padding-left: 10px; font-weight: bold;">견적분류</td>
	    <td width="263" colspan="8" >
        
        <select name=ca_name id=ca_name itemname="견적분류" class="form-control input-sm required" style="width:165px; ">
		          <option value="자동차리스">자동차리스</option>
				  <option value="장기렌트">장기렌트</option>
				  <option value="자동차할부">자동차할부</option>
		</select>
        </td>
        
	  <tr>
		  <td width="263" height="20" class="ddd"style="padding-left: 10px; font-weight: bold;">고   객   명</td>
	    <td width="263" colspan="3" ><input name=wr_name class="form-control input-sm" style="width:165px;" size="5" maxlength=20 itemname="고객명" required></td>
        
      <tr>
		  <td width="263" height="20" class="ddd"style="padding-left: 10px; font-weight: bold;">견적차종</td>
	    <td width="263" colspan="3" ><input name=wr_subject class="form-control input-sm" style="width:165px;" size="5" maxlength=20 itemname="견적차종" required></td>
        
      </tr>
	  <tr>
		  <td  width="263" height="23" class="ddd"style="padding-left: 10px; font-weight: bold;">연   락   처</td>
		  <td colspan="3" ><select name="hp1" itemname="휴대폰" style="width:70px; ">
				  <option value="010">010</option>
				  <option value="011">011</option>
				  <option value="016">016</option>
				  <option value="017">017</option>
				  <option value="018">018</option>
				  <option value="019">019</option>
			   </select>
		    <input name="hp2" type="text" required  style="width:45px;border:1px solid #ddd;" maxlength="4" itemname="휴대폰"/>
		    <input name="hp3" type="text" required  style="width:45px;border:1px solid #ddd;" maxlength="4" itemname="휴대폰"/>
			   
	    </td>
	  </tr>
      
      
      <td width="220" height="20" class="ddd"style="padding-left: 10px; font-weight: bold;">비밀번호</td>
	    <td width="100" colspan="3" ><input type=wr_password  name=wr_password id="$wr_password" class="form-control input-sm" maxLength="20" title="비밀번호" placeholder="비밀번호를 입력해 주세요" <?=$password_required ?>></td>
        
        
        
        
        
        <?php if ($is_guest) { //자동등록방지  ?>
	<div class="row">
		<div class="col-xs-12 col-input">	
			<?=$captcha_html ?>
		</div>
	</div>
	<?php } ?>	
    
    
    
    
      

	  <tr>
		  <td width="246" height="39" class="ddd"style="padding-left: 10px; font-weight: bold;">기타문의</td>
		  <td colspan="3" ><textarea name=wr_content id="$wr_password" cols="23"' rows=3 required class=tx id="wr_content" overflow-y:hidden;word-break:break-all; itemname="내용"></textarea>
		    
			  </td>
	  </tr>
      
      
      <?php
			$option = '';
			$option_hidden = '';
			if ($is_notice || $is_html || $is_secret || $is_mail) {
				$option = '';
				if ($is_notice) {
					$option .= "\n".'<label class="input"><input type="checkbox" id="notice" name="notice" value="1" '.$notice_checked.'>'."\n".' 공지</label>&nbsp;&nbsp;';
				}

				if ($is_html) {
					if ($is_dhtml_editor) {
						$option_hidden .= '<input type="hidden" value="html1" name="html">';
					} else {
						$option .= "\n".'<label class="input"><input type="checkbox" id="html" name="html" onclick="html_auto_br(this);" value="'.$html_value.'" '.$html_checked.'>'."\n".' HTML</label>&nbsp;&nbsp;';
					}
				}

				if ($is_secret) {
					if ($is_admin || $is_secret==1) {
						$option .= "\n".'<label class="input"><input type="checkbox" id="secret" name="secret" value="secret" '.$secret_checked.'>'."\n".' 비밀글</label>&nbsp;&nbsp;';
					} else {
						$option_hidden .= '<input type="hidden" name="secret" value="secret">';
					}
				}

				if ($is_mail) {
					$option .= "\n".'<label class="input"><input type="checkbox" id="mail" name="mail" value="mail" '.$recv_email_checked.'>'."\n".' 답변메일받기</label>&nbsp;&nbsp;';
				}
			}
			echo $option_hidden;
			?>		
			<div class="options"><?=$option ?>
            

</table>


<input type=image id="btn_submit" src="images/btn.png" border="0" onfocus='blur()' />
  
  
</form>
  
  
  <script>
$(document).on('change', '.btn-file :file', function() {
	var input = $(this),
		numFiles = input.get(0).files ? input.get(0).files.length : 1,
		label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
	input.trigger('fileselect', [numFiles, label]);
});
$(document).ready( function() {
	$('#wr_content').css({minWidth: 100});
	
	$('.btn-file :file').on('fileselect', function(event, numFiles, label) {
		$(this).parent().parent().parent().find('.input-file').addClass('placeholder').val(label)
	});
});	

<?php if($write_min || $write_max) { ?>
// 글자수 제한
var char_min = parseInt(<?=$write_min; ?>); // 최소
var char_max = parseInt(<?=$write_max; ?>); // 최대
check_byte("wr_content", "char_count");

$(function() {
	$("#wr_content").on("keyup", function() {
		check_byte("wr_content", "char_count");
	});
});

<?php } ?>
function html_auto_br(obj)
{
	if (obj.checked) {
		result = confirm("자동 줄바꿈을 하시겠습니까?\n\n자동 줄바꿈은 게시물 내용중 줄바뀐 곳을<br>태그로 변환하는 기능입니다.");
		if (result)
			obj.value = "html2";
		else
			obj.value = "html1";
	}
	else
		obj.value = "";
}

function fwrite_submit(f)
{
	try {
	
	<?=$editor_js; // 에디터 사용시 자바스크립트에서 내용을 폼필드로 넣어주며 내용이 입력되었는지 검사함   ?>

	var subject = "";
	var content = "";
	$.ajax({
		url: g5_bbs_url+"/ajax.filter.php",
		type: "POST",
		data: {
			"subject": f.wr_subject.value,
			"content": f.wr_content.value
		},
		dataType: "json",
		async: false,
		cache: false,
		success: function(data, textStatus) {
			subject = data.subject;
			content = data.content;
		}
	});

	if (subject) {
		alert("제목에 금지단어('"+subject+"')가 포함되어 있습니다.");
		f.wr_subject.focus();
		return false;
	}

	if (content) {
		alert("내용에 금지단어('"+content+"')가 포함되어 있습니다.");
		if (typeof(ed_wr_content) != "undefined")
			ed_wr_content.returnFalse();
		else
			f.wr_content.focus();
		return false;
	}

	if (document.getElementById("char_count")) {
		if (char_min > 0 || char_max > 0) {
			var cnt = parseInt(check_byte("wr_content", "char_count"));
			if (char_min > 0 && char_min > cnt) {
				alert("내용은 "+char_min+"글자 이상 쓰셔야 합니다.");
				return false;
			}
			else if (char_max > 0 && char_max < cnt) {
				alert("내용은 "+char_max+"글자 이하로 쓰셔야 합니다.");
				return false;
			}
		}
	}

	<?=$captcha_js; // 캡챠 사용시 자바스크립트에서 입력된 캡챠를 검사함  ?>

	document.getElementById("btn_submit").disabled = "disabled";
	
	} catch(e) {
		console.log(e);
		return false;
	}
	return true;
}
</script>



  
  </div>
  
  
  <script language="javascript">
  function submitChk(f)
  {
	  f.action = "form_ok.php";
	  return true;
  }
  </script>
  
  
  
  
