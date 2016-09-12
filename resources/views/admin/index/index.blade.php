@extends('admin.base.base')

@section('content')
    <section class="content-header">
          <h1>前台用户信息管理</h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>首页</a></li>
            <li><a href="#">用户管理</a></li>
            <li class="active">前台用户管理</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">前台用户信息管理</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tr>
                      <th>ID</th>
                      <th>姓名</th>
                      <th>年龄</th>
                      <th>性别</th>
                      <th>班级</th>
                      <th style="width:200px;">操作</th>
                    </tr>
                    <tr>
                      <td>1.</td>
                      <td>胡冰涛</td>
                      <td>20</td>
                      <td>男</td>
                      <td>lamp49</td>
                      <td style="width:200px;"><button class="btn btn-danger">删除</button> <button class="btn btn-info">修改</button></td>
                    </tr>
                  </table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  <ul class="pagination pagination-sm no-margin pull-right">
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">&raquo;</a></li>
                  </ul>
                </div>
              </div><!-- /.box -->

             
            </div><!-- /.col -->
            
          </div><!-- /.row -->

        </section><!-- /.content -->
@endsection