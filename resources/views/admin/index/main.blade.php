<script type="text/javascript">

</script>
<div class="bjui-pageHeader" style="background:#FFF;">
    <div style="padding: 0 15px;">
        <h4 style="margin-bottom:20px;">
            <small>管理员</small> admin <small>欢迎回来！</small>
        </h4>
        <div class="row" style="margin-top:10px;">
            <div class="col-md-6" style="padding:5px;">
                <div class="alert alert-info" role="alert" style="margin:0 0 5px; padding:5px 15px;">
                    <h5>系统信息：{{ PHP_OS }}</h5>
                </div>
            </div>
            <div class="col-md-6" style="padding:5px;">
                <div class="alert alert-info" role="alert" style="margin:0 0 5px; padding:5px 15px;">
                    <h5>内存信息：{{ memory_get_usage() }}</h5>
                </div>
            </div>
        </div>
    </div>
</div>
