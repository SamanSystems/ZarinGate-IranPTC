<div class="zx-y-logged-page">
    <div class="zx-y-logged-page-top ui-widget-header zx-content-shadow ui-corner-tl">
        <div class="top-ico"><span class="ui-icon ui-icon-circle-triangle-e"></span></div>
        <div class="top-txt"><?php echo $config['site']; ?>, افزایش موجودی حساب سپرده</div>
        <div class="top-pro"></div>
        <div class="top-bac tipTip tip_bottom ui-widget-header zx-content-shadow ui-corner-tr" title="بازگشت"><a href="/?v=c"><span class="ui-icon ui-icon-color-white ui-icon-circle-triangle-w"></span></a></div>
    </div>
    <div class="zx-y-logged-page-top-two ui-widget-header zx-content-shadow">
        <div class="top-two-head">
            <div class="head-txt1"><?php echo $config['site']; ?>: افزایش موجودی حساب سپرده</div>
            <div class="head-txt2">افزایش موجودی حساب سپرده از طریق حساب زرین پال، حساب بانکی، حساب لیبرتی رزرو یا حساب جاری سایت</div>
        </div>
    </div>
    <div class="zx-y-logged-page-center ui-widget-zx-content-page zx-content-shadow">
		
	<div id="select" align="center">
	
		<div style="font-family:tahoma;font-size:20px;margin-top:50px;">
		<span class="ui-state-highlight ui-corner-all" style="padding:15px;">.: لطفا یکی از روشهای انتقال را انتخاب نمایید :.</span>
        <?php if(config('bank_tr') == 1){ ?>
		</div>
		
		<table align="center" style="margin:80px auto;font-size:13px;">
		<tr>
			<td>
				<div class="click-btn ma ui-helper-clearfix op-pointer">
					<div class="flo-l no-bold pad-5 ui-widget-header ui-corner-left">جاری</div>
					<div class="flo-r no-bold pad-5 ui-state-hover ui-corner-right" style="border-width:1px 1px 1px 0;">حداقل <?php echo config('min_balance'); ?>ت</div>
				</div>
			</td>
            
  <?php if(config('support_libertyreserve') == 1 || $xUS['id'] == 1){?>
  			<td width="10"></td>
		        <td>
				<div class="click-btn lr ui-helper-clearfix op-pointer">
					<div class="flo-l no-bold pad-5 ui-widget-header ui-corner-left">لیبرتی رزرو</div>
					<div class="flo-r no-bold pad-5 ui-state-hover ui-corner-right" style="border-width:1px 1px 1px 0;">حداقل <?php echo config('min_liberty'); ?>$</div>
				</div>
			</td>
      <?php } ?>
 <?php if(config('support_zarinpalzg') == 1 || $xUS['id'] == 1){ ?>
 			<td width="10"></td>
		        <td>
				<div class="click-btn zr ui-helper-clearfix op-pointer">
					<div class="flo-l no-bold pad-5 ui-widget-header ui-corner-left">زرین پال</div>
					<div class="flo-r no-bold pad-5 ui-state-hover ui-corner-right" style="border-width:1px 1px 1px 0;">حداقل <?php echo config('min_zarinpalzg'); ?>ت</div>
				</div>
			</td>
      <?php } ?>
  <?php if(config('support_pasargad') == 1 || $xUS['id'] == 1){ ?>
			<td width="10"></td>
			<td>
				<div class="click-btn ap ui-helper-clearfix op-pointer">
					<div class="flo-l no-bold pad-5 ui-widget-header ui-corner-left">شتاب</div>
					<div class="flo-r no-bold pad-5 ui-state-hover ui-corner-right" style="border-width:1px 1px 1px 0;">حداقل <?php echo config('min_pasargad'); ?>ت</div>
				</div>
			</td>
    <?php } ?>  
<td width="10"></td>
			<td>
				<div class="click-btn apx ui-helper-clearfix op-pointer">
					<div class="flo-l no-bold pad-5 ui-widget-header ui-corner-left">زرین پال</div>
					<div class="flo-r no-bold pad-5 ui-state-hover ui-corner-right" style="border-width:1px 1px 1px 0;">حداقل <?php echo config('min_pasargad'); ?>ت</div>
				</div>
			</td>
		</table>
	<?php }
	else { ?>
	<table align="center" style="margin:80px auto;font-size:13px;">
	<tr>
	        <td>
    <div class="ui-helper-clearfix op-pointer">
                <div class="flo-l no-bold pad-5 ui-state-hover ui-corner-left" style="border-width:1px 1px 1px 0; color:#000;">توجه</div>
				<div class="flo-r no-bold pad-5 ui-widget-header ui-corner-right">موقتا سیستم قطع می باشد و امکان افزایش موجودی نیست</div>
			</div></td>
		<td width="20"></td>
	</table>
    <?php }?>
	</div>
	
	<div id="xmb-ma" class="xmb-box" align="center" style="display:none;">

<?php
	if($xUS['b_main'] < config('min_balance')){
		echo '<div style="margin:100px; auto;color:#FF0003;">شما حداقل باید '.config('min_balance').' تومان موجودی داشته باشید.</div>';
	} else {
?>

<div align="center" style="width:270px;margin:50px auto;"><span class="op-sha" style="font-size:17px;">حساب جاری</span>
			<table width="100%" cellpadding="0" cellspacing="5" class="pad-10 op-box-shadow op-slider ui-widget-content ui-corner-tr ui-corner-bottom">
			<tr>
				<td align="center"><span id="amount-ma" class="pad-2-5 bold" style="font-size:18px;color:#228B22;cursor:default;"><?php echo config('min_balance'); ?> تومان</span></td>
			</tr>
			<tr>
				<td align="center"><div id="slider-ma"></div></td>
			</tr>
			<tr>
				<td align="center" style="padding-top:10px;">
            		<button id="request" class="ui-button ui-button-text-icon ui-widget ui-state-default ui-corner-all"> 
            			<span class="ui-button-icon-primary ui-icon ui-icon-circle-plus"></span> 
            			<span class="ui-button-text">افزایش موجودی</span> 
            		</button>
                </td>
			</tr>
			</table>
		</div>
<script type="text/javascript">
$(function(){
	
	$("#slider-ma").slider({range:"min",value:<?php echo config('min_balance'); ?>,step:1,min:<?php echo config('min_balance'); ?>,max:<?php echo floor($xUS['b_main']); ?>,slide:function(event,ui){
		$("#amount-ma").text(
			ui.value.toFixed(0)+' تومان '
		);}
	});	
	
	$('#request').click(function(){
		$.ajax({
			type:'POST',
			url:window.location.protocol+'//'+window.location.host+'/?v=c&cc=post&ccc=reba',
			data:'quality='+$('#slider-ma').slider('value'),
			cache:false,
			beforeSend:function(){
				$('html *').addClass('op-progress');
			}, success:function(html){
				$('html *').removeClass('op-progress');
				document.location.href=_url+'/?v=c&cc=rb';
			}
		});
	});
	
});
</script>
<?php
	}
?>
        <button style="position:absolute;top:5px;left:5px;" class="click-ret ui-button ui-button-text-icon ui-widget ui-state-default ui-corner-all"> 
            <span class="ui-button-icon-primary ui-icon ui-icon-circle-triangle-w"></span> 
            <span class="ui-button-text">بازگشت</span> 
        </button>
	</div>
   
	  <?php
if(config('support_libertyreserve') == 1 || $xUS['id'] == 1){
?>
	<div id="xmb-lr" class="xmb-box" align="center" style="display:none;">

		<div align="center" style="width:270px;margin:50px auto;"><span class="op-sha" style="font-size:17px;"><b>حساب لیبرتی رزرو</b></span>
			<table width="100%" cellpadding="0" cellspacing="5" class="pad-10 op-box-shadow op-slider ui-widget-content ui-corner-tr ui-corner-bottom">
			<tr>
				<td align="center"><span id="amount-lr" class="pad-2-5 bold" style="font-size:18px;color:#228B22;cursor:default;"><?php echo config('min_liberty'); ?> دلار</span></td>
			</tr>
			<tr>
				<td align="center"><div id="slider-lr"></div></td>
			</tr>
			<tr>
				<td align="center" style="padding-top:10px;">	
<form method="POST" action="https://sci.libertyreserve.com" id="form-lr" onsubmit="return false;">
    <input type="hidden" name="lr_acc" value="<?php echo config('liberty_acc_number'); ?>">
    <input type="hidden" name="lr_store" value="<?php echo config('liberty_store_name'); ?>">
    <input type="hidden" name="lr_amnt" value="<?php echo config('min_liberty'); ?>">
    <input type="hidden" name="lr_currency" value="LRUSD">
    <input type="hidden" name="lr_comments" value="Increase balance deposit for <?php echo $xUS['x_username']; ?>">
    <input type="hidden" name="custom_item" value="inc_blnc"/>
    <input type="hidden" name="custom_id" value="<?php echo $xUS['id']; ?>"/>
    <input type="image" src="/includes/img/button/lr-1.png" border="0" name="submit" alt="Liberty Reserve" />
</form>
				</td>
			</tr>
			</table>
		</div>		
        <button style="position:absolute;top:5px;left:5px;" class="click-ret ui-button ui-button-text-icon ui-widget ui-state-default ui-corner-all"> 
            <span class="ui-button-icon-primary ui-icon ui-icon-circle-triangle-w"></span> 
            <span class="ui-button-text">بازگشت</span> 
        </button>
	</div>	
     <?php
	}
?>  
	 <?php
if(config('support_zarinpalzg') == 1 || $xUS['id'] == 1){
?>
	<div id="xmb-zr" class="xmb-box" align="center" style="display:none;">

		<div align="center" style="width:270px;margin:50px auto;"><span class="op-sha" style="font-size:17px;"><b>حساب زرین پال</b></span>
			<table width="100%" cellpadding="0" cellspacing="5" class="pad-10 op-box-shadow op-slider ui-widget-content ui-corner-tr ui-corner-bottom">
			<tr>
				<td align="center"><span id="amount-zr" class="pad-2-5 bold" style="font-size:18px;color:#228B22;cursor:default;"><?php echo config('min_zarinpalzg'); ?> تومان</span></td>
			</tr>
			<tr>
				<td align="center"><div id="slider-zr"></div></td>
			</tr>
			<tr>
				<td align="center" style="padding-top:10px;">	
<form method="POST" action="/?v=c&cc=order&pay=bank" id="form-zr" onsubmit="return false;" align="center">
   <input type="hidden" name="zr_amnt" value="<?php echo config('min_zarinpalzg'); ?>">
   <input type="hidden" name="zr_comments" value="<?php echo $xUS['x_username']; ?>">
   <input type="image" src="/includes/img/button/zarinpalzg.jpg" border="0" name="submit" alt="افزایش موجودی حساب با کارتهای عضو شبکه شتاب" />
</form>	
				</td>
			</tr>
			</table>
		</div>		
        <button style="position:absolute;top:5px;left:5px;" class="click-ret ui-button ui-button-text-icon ui-widget ui-state-default ui-corner-all"> 
            <span class="ui-button-icon-primary ui-icon ui-icon-circle-triangle-w"></span> 
            <span class="ui-button-text">بازگشت</span> 
        </button>
	</div>	
     <?php
	}
?>  	
	<?php
if(config('support_pasargad') == 1 || $xUS['id'] == 1){
?>
	<div id="xmb-ap" class="xmb-box" align="center" style="display:none;">

		<div align="center" style="width:270px;margin:50px auto;"><span class="op-sha" style="font-size:17px;"><b>حساب بانکی</b></span>
			<table width="100%" cellpadding="0" cellspacing="5" class="pad-10 op-box-shadow op-slider ui-widget-content ui-corner-tr ui-corner-bottom">
			<tr>
				<td align="center"><span id="amount-ap" class="pad-2-5 bold" style="font-size:18px;color:#228B22;cursor:default;"><?php echo config('min_pasargad'); ?> تومان</span></td>
			</tr>
			<tr>
				<td align="center"><div id="slider-ap"></div></td>
			</tr>
			<tr>
				<td align="center" style="padding-top:10px;">	
<form method="POST" action="/paypasargad/" id="form-ap" onsubmit="return false;" align="center">
   <input type="hidden" name="ap_amount" value="<?php echo config('min_pasargad'); ?>0">
   <input type="hidden" name="ap_user" value="<?php echo $xUS['x_username']; ?>">
   <input type="image" src="/includes/img/button/shetab.jpg" border="0" name="submit" alt="افزایش موجودی حساب با کارتهای عضو شبکه شتاب" />
</form>
				</td>
			</tr>
			</table>
		</div>
		
        <button style="position:absolute;top:5px;left:5px;" class="click-ret ui-button ui-button-text-icon ui-widget ui-state-default ui-corner-all"> 
            <span class="ui-button-icon-primary ui-icon ui-icon-circle-triangle-w"></span> 
            <span class="ui-button-text">بازگشت</span> 
        </button>
	</div>
 <?php
	}
?>       




<div id="xmb-apx" class="xmb-box" align="center" style="display:none;">

		<div align="center" style="width:270px;margin:50px auto;"><span class="op-sha" style="font-size:17px;"><b>پرداخت zarinpalzg</b></span>
			<table width="100%" cellpadding="0" cellspacing="5" class="pad-10 op-box-shadow op-slider ui-widget-content ui-corner-tr ui-corner-bottom">
			<tr>
				<td align="center"><span id="amount-apx" class="pad-2-5 bold" style="font-size:18px;color:#228B22;cursor:default;"><?php echo config('min_pasargad'); ?> تومان</span></td>
			</tr>
			<tr>
				<td align="center"><div id="slider-apx"></div></td>
			</tr>
			<tr>
				<td align="center" style="padding-top:10px;">	
<form method="POST" action="/zarinpalzg/" id="form-apx" onsubmit="return false;" align="center">
   <input type="hidden" name="apx_amount" value="<?php echo config('min_pasargad'); ?>0">
   <input type="hidden" name="apx_user" value="<?php echo $xUS['x_username']; ?>">
   <input type="image" src="logo.gif" border="0" name="submit" alt="افزایش موجودی حساب با zarinpalzg" />
</form>
				</td>
			</tr>
			</table>
		</div>
		
        <button style="position:absolute;top:5px;left:5px;" class="click-ret ui-button ui-button-text-icon ui-widget ui-state-default ui-corner-all"> 
            <span class="ui-button-icon-primary ui-icon ui-icon-circle-triangle-w"></span> 
            <span class="ui-button-text">بازگشت</span> 
        </button>
	</div>













    </div>
    <div class="zx-y-logged-page-bottom ui-widget-header zx-content-shadow ui-corner-bl">
        <div class="bottom-ico"><span class="ui-icon ui-icon-circle-triangle-e"></span></div>
        <div class="bottom-txt"><?php echo $config['site']; ?>, افزایش موجودی حساب سپرده</div>
        <div class="bottom-pro"></div>
        <div class="bottom-top tipTip tip_bottom ui-widget-header zx-content-shadow ui-corner-br" title="رفتن به بالا" onclick="$(document).scrollTop(0);"><span class="ui-icon ui-icon-color-white ui-icon-circle-triangle-n"></span></div>
    </div>
</div>
<script type="text/javascript">
$(function(){
	$('.click-ret').click(function(){
		$('.xmb-box').hide();
		$('#select').fadeIn('slow');
	});
	
	$('.click-btn').click(function(){
		$('#select, .xmb-box').hide();
		if($(this).is('.ma')){
			$('#xmb-ma').fadeIn('slow');
		} else if($(this).is('.zr')){
			$('#xmb-zr').fadeIn('slow');
		} else if($(this).is('.lr')){
			$('#xmb-lr').fadeIn('slow');
		} else if($(this).is('.ap')){
			$('#xmb-ap').fadeIn('slow');
		}else if($(this).is('.apx')){
			$('#xmb-apx').fadeIn('slow');
		}
	});
	
	$("#slider-zr").slider({range:"min",step:1000,value:<?php echo config('min_zarinpalzg'); ?>,min:<?php echo config('min_zarinpalzg'); ?>,max:350000,
		slide:function(event,ui){
			$("#amount-zr").text(ui.value.toFixed(0)+' تومان ');
			$('#form-zr [name=zr_amnt]').val(ui.value/1);
		}
	});
	
	$("#slider-lr").slider({range:"min",step:1,value:<?php echo config('min_liberty'); ?>,min:<?php echo config('min_liberty'); ?>,max:500,
		slide:function(event,ui){
			$("#amount-lr").text('$'+ui.value.toFixed(0));
			$('#form-lr [name=lr_amnt]').val(ui.value/1);
		}
	});
	
	$("#slider-ap").slider({range:"min",step:1000,value:<?php echo config('min_pasargad'); ?>,min:<?php echo config('min_pasargad'); ?>,max:350000,
		slide:function(event,ui){
			$("#amount-ap").text(ui.value.toFixed(0)+' تومان ');
			$('#form-ap [name=ap_amount]').val(ui.value*10);
		}
	});
	$("#slider-apx").slider({range:"min",step:1000,value:<?php echo config('min_pasargad'); ?>,min:<?php echo config('min_pasargad'); ?>,max:350000,
		slide:function(event,ui){
			$("#amount-apx").text(ui.value.toFixed(0)+' تومان ');
			$('#form-apx [name=apx_amount]').val(ui.value*10);
		}
	});

	var $confirm_lr = $('<div align="center"></div>')
		.html('افزایش موجودی حساب سپرده از طریق حساب <b>لیبرتی رزرو</b>')
		.dialog({autoOpen:false,resizable:false,width:450,minHeight:0,modal:true,title:'شما مطمئن هستید؟',
			buttons:{
				خیر:function(){$(this).dialog('close');return false;},
				بله:function(){$(this).dialog('close');$('#form-lr').submit();}
			}
	});
	
	$('#form-lr').submit(function(){
		$confirm_lr.dialog('open');
	});
	
	var $confirm_zr = $('<div align="center"></div>')
		.html('افزایش موجودی حساب سپرده از طریق حساب <b>زرین پال</b>')
		.dialog({autoOpen:false,resizable:false,width:450,minHeight:0,modal:true,title:'شما مطمئن هستید؟',
			buttons:{
				خیر:function(){$(this).dialog('close');return false;},
				بله:function(){$(this).dialog('close');$('#form-zr').submit();}
			}
	});
	
	$('#form-zr').submit(function(){
		$confirm_zr.dialog('open');
	});
	
	var $confirm = $('<div align="center"></div>')
		.html('افزایش موجودی حساب سپرده از طریق حساب <b>بانکی</b> عضو شتاب')
		.dialog({autoOpen:false,resizable:false,width:450,minHeight:0,modal:true,title:'شما مطمئن هستید؟',
			buttons:{
				خیر:function(){$(this).dialog('close');return false;},
				بله:function(){$(this).dialog('close');$('#form-ap').submit();}
			}
	});
	
	$('#form-ap').submit(function(){
		$confirm.dialog('open');
	});


var $confirm_pl = $('<div align="center"></div>')
		.html('افزایش موجودی حساب سپرده از طریق حساب <b>zarinpalzg<b>')
		.dialog({autoOpen:false,resizable:false,width:450,minHeight:0,modal:true,title:'شما مطمئن هستید؟',
			buttons:{
				خیر:function(){$(this).dialog('close');return false;},
				بله:function(){$(this).dialog('close');$('#form-apx').submit();}
			}
	});
	$('#form-apx').submit(function(){
		$confirm_pl.dialog('open');
	});

});
</script>