<script type="text/javascript">

</script>
<div class="bjui-pageContent">
    <form action="{{ route('admin_sys_roles_add') }}" data-toggle="validate" data-alertmsg="false">
        {{ csrf_field() }}
        <table class="table table-condensed table-hover" width="100%">
            <tbody>
            <tr>
                <td>
                    <label for="name" class="control-label x120">权限名称：</label>
                    <input type="text" name="name" id="name" value="" data-rule="required" size="15">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="show" class="control-label x120">权限标识：</label>
                    <input type="text" name="show" id="show" value="" data-rule="required" size="15">
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
