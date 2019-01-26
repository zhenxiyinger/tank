<div class="bjui-pageHeader">
    <form id="pagerForm" data-toggle="ajaxsearch" action="table.html" method="post">
        <input type="hidden" name="pageSize" value="${model.pageSize}">
        <input type="hidden" name="pageCurrent" value="${model.pageCurrent}">
        <input type="hidden" name="orderField" value="${param.orderField}">
        <input type="hidden" name="orderDirection" value="${param.orderDirection}">
        <div class="bjui-searchBar">
            <div class="pull-right">
                <button type="button" class="btn btn-blue" data-url="{{ route('admin_sys_roles_add') }}" data-toggle="dialog" data-icon="plus" title="添加" data-width="500" data-height="320" data-mask="true">添加</button>
            </div>
        </div>
    </form>
</div>
<div class="bjui-pageContent tableContent">
    <table class="table table-bordered table-hover table-striped table-top" data-selected-multi="true">
        <thead>
        <tr>
            <th>角色名称</th>
            <th>创建时间</th>
            <th align="center" width="120">操作</th>
        </tr>
        </thead>
        <tbody>
        @foreach($dataList as $data)
            <tr data-id="{{ $data['id'] }}">
                <td>{{ $data['name'] }}</td>
                <td>{{ $data['created_at'] }}</td>
                <td align="center">
                    <a href="{{ route('admin_sys_roles_edit') }}?id={{ $data['id'] }}" class="btn btn-green" data-toggle="dialog" data-title="编辑">编辑</a>
                    <a href="{{ route('admin_sys_roles_del') }}?id={{ $data['id'] }}" class="btn btn-red" data-toggle="doajax" data-confirm-msg="确定删除？">删除</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
