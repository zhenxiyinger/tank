<script type="text/javascript">

</script>
<div class="bjui-pageContent">
    <form action="{{ route('admin_sys_users_add') }}" data-toggle="validate" data-alertmsg="false">
        {{ csrf_field() }}
        <table class="table table-condensed table-hover" width="100%">
            <tbody>
            <tr>
                <td>
                    <label for="username" class="control-label x120">用户名：</label>
                    <input type="text" name="username" id="username" value="" data-rule="required" size="15">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password" class="control-label x120">密码：</label>
                    <input type="password" name="password" id="password" value="" data-rule="required" size="15">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="repassword" class="control-label x120">重复密码：</label>
                    <input type="password" name="repassword" id="repassword" value="" data-rule="required" size="15">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="name" class="control-label x120">姓名：</label>
                    <input type="text" name="name" id="name" value="" data-rule="required" size="15">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="mobile" class="control-label x120">手机号：</label>
                    <input type="text" name="mobile" id="mobile" value="" data-rule="required" size="15">
                </td>
            </tr>
            </tbody>
        </table>
    </form>
</div>
<div class="bjui-pageFooter">
    <ul>
        <li><button type="button" class="btn-close" data-icon="close">取消</button></li>
        <li><button type="submit" class="btn-default" data-icon="save">保存</button></li>
    </ul>
</div>
