<?php if(!class_exists("View", false)) exit("no direct access allowed");?><script type="text/javascript">
function addRule(){ //增加
  $('#rewrite-rule-form tr').eq(0).before($('#rewrite-rule-tpl').html());
}
function delRule(e){
  $(e).closest('tr').remove();
}
function upRule(e){ //上升
  var tr = $(e).closest('tr'), prev = tr.prev();
  if(prev.length > 0){
    prev.insertAfter(tr);
  }else{
    $('body').vdsAlert({msg:'已经到最上面了!', time:1});
  }
}
function downRule(e){ //下降
  var tr = $(e).closest('tr'), next = tr.next();
  if(next.length > 0){
    next.insertBefore(tr);
  }else{
    $('body').vdsAlert({msg:'已经到最下面了!', time:1});
  }
}
</script>
<div class="bw-row pad10 cut">
  <form method="post" action="<?php echo url(array('m'=>$MOD, 'c'=>'setting', 'a'=>'update', 'step'=>'rewrite', ));?>">
    <table class="dataform">
      <tr>
        <th width="120">URL 伪静态</th>
        <td>
          <div class="pad5">
            <label><input type="radio" name="rewrite_enable" value="1" <?php if ($rs['rewrite_enable'] == 1) : ?>checked="checked"<?php endif; ?> /><font class="green ml5">开启</font></label>
            <label class="ml20"><input type="radio" name="rewrite_enable" value="0" <?php if ($rs['rewrite_enable'] == 0) : ?>checked="checked"<?php endif; ?> /><font class="red ml5">关闭</font></label>
            <font class="ml20 vtcmid caaa">开启URL 伪静态(URL Rewrite)，请确认您的服务器或空间支持URL Rewrite功能</font>
          </div>
        </td>
      </tr>
      <tr>
        <th>伪静态规则</th>
        <td>
          <div class="module">
            <button type="button" class="cbtn sm btn" onclick="addRule()">+1 规则</button>
            <font class="ml20 vtcmid caaa">设置伪静态规则，只有在系统开启了URL Rewrite功能后才会生效</font>
          </div>
          <div class="module mt8">
            <table class="dataform" id="rewrite-rule-form">
              <?php $_foreach_v_counter = 0; $_foreach_v_total = count($rs['rewrite_rule']);?><?php foreach( $rs['rewrite_rule'] as $k => $v ) : ?><?php $_foreach_v_index = $_foreach_v_counter;$_foreach_v_iteration = $_foreach_v_counter + 1;$_foreach_v_first = ($_foreach_v_counter == 0);$_foreach_v_last = ($_foreach_v_counter == $_foreach_v_total - 1);$_foreach_v_counter++;?>
              <tr>
                <td width="110">
                  <button type="button" class="mbtn btn" onclick="delRule(this)">移除</button><span class="sep10"></span>
                  <button type="button" class="mbtn btn" onclick="upRule(this)">升</button><span class="sep10"></span>
                  <button type="button" class="mbtn btn" onclick="downRule(this)">降</button>
                </td>
                <td><input class="w200 txt ta-r" name="rewrite_rule[k][]" value="<?php echo htmlspecialchars($k, ENT_QUOTES, "UTF-8"); ?>" /><span class="sep20 c999">===</span><input class="w200 txt" name="rewrite_rule[v][]" value="<?php echo htmlspecialchars($v, ENT_QUOTES, "UTF-8"); ?>" /></td>
              </tr>
              <?php endforeach; ?>
            </table>
          </div>
        </td>
      </tr>
    </table>
    <div class="submitbtn" style="padding-left:260px;">
      <button type="submit" class="ubtn btn">保存并更新伪静态设置</button>
      <button type="reset" class="fbtn btn">重置表单</button>
    </div>
  </form>
</div>
<script type="text/template" id="rewrite-rule-tpl">
<tr>
  <td width="110">
    <button type="button" class="mbtn btn" onclick="delRule(this)">移除</button>
    <span class="sep10"></span>
    <button type="button" class="mbtn btn" onclick="upRule(this)">升</button>
    <span class="sep10"></span>
    <button type="button" class="mbtn btn" onclick="downRule(this)">降</button>
  </td>
  <td><input class="w200 txt ta-r" name="rewrite_rule[k][]" value="" /><span class="sep20 c999">===</span><input class="w200 txt" name="rewrite_rule[v][]" value="" /></td>
</tr>
</script>