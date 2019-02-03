<div class="bjui-pageHeader">
    <form id="pagerForm" data-toggle="ajaxsearch" action="table.html" method="post">
        <input type="hidden" name="pageSize" value="${model.pageSize}">
        <input type="hidden" name="pageCurrent" value="${model.pageCurrent}">
        <input type="hidden" name="orderField" value="${param.orderField}">
        <input type="hidden" name="orderDirection" value="${param.orderDirection}">
        <div class="bjui-searchBar">
            <div class="pull-right">
                <button type="button" class="btn btn-blue" data-url="{{ route('admin_sys_users_add') }}" data-toggle="dialog" data-icon="plus" title="添加" data-width="500" data-height="320" data-mask="true">添加</button>
            </div>
        </div>
    </form>
</div>
<div class="bjui-pageContent tableContent">
    <table class="table table-bordered table-hover table-striped table-top" data-selected-multi="true">
        <thead>
        <tr>
            <th>用户名</th>
            <th>姓名</th>
            <th>手机号</th>
            <th width="200">上次登录</th>
            <th width="100">状态</th>
            <th align="center" width="120">操作</th>
        </tr>
        </thead>
        <tbody>
        @foreach($dataList as $data)
            <tr data-id="{{ $data['id'] }}">
                <td>{{ $data['username'] }}</td>
                <td>{{ $data['name'] }}</td>
                <td>{{ $data['mobile'] }}</td>
                <td>{{ $data['updated_at'] }}</td>
                <td>{{ $data['status'] == 1 ? '启用' : '禁用' }}</td>
                <td align="center">
                    <a href="{{ route('admin_sys_users_edit') }}?id={{ $data['id'] }}" class="btn btn-green" data-toggle="dialog" data-title="编辑">编辑</a>
                    <a href="{{ route('admin_sys_users_del') }}?id={{ $data['id'] }}" class="btn btn-red" data-toggle="doajax" data-confirm-msg="确定删除？">删除</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
