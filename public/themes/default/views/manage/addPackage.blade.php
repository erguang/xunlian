<div class="widget-header mg-bottom20 mg-top12 widget-well">
    <div class="widget-toolbar no-border pull-left no-padding">
        <ul class="nav nav-tabs">
            <li >
                <a href="http://kppw31.io/manage/vipPackageList">套餐列表</a>
            </li>
            <li class="active">
                <a href="http://kppw31.io/manage/addPackage">添加套餐</a>
            </li>
        </ul>
    </div>
</div>

<form class="form-horizontal addForm" role="form" enctype="" method="" action="">
    <input type="hidden" name="_token" value="3X6WmccLGWW9rzmJhqXkkH8tc2bzW6FhJoO1oOr7">
    <!-- #section:elements.form -->
    <div class="g-backrealdetails clearfix bor-border interface">

        <div class="space-8 col-xs-12"></div>
        <div class="form-group interface-bottom col-xs-12">
            <label class="col-sm-1 control-label no-padding-right" for="form-field-1">签约热线</label>

            <div class="col-sm-4">
                <input type="text" id="form-field-1" placeholder="" class="col-xs-10 col-sm-12" name="web_site" value="众包威客开源建站系统">
            </div>
        </div>
        <div class="form-group interface-bottom col-xs-12">
            <label class="col-sm-1 control-label no-padding-right" for="form-field-1">套餐标识</label>

            <div class="col-sm-4">
                <div class="memberdiv pull-left">
                    <div class="position-relative">

                        <div id="imgdiv1">
                            <img id="imgShow1" width="120" height="120" src="http://kppw31.io/attachment/sys/e333d1a610db075fb9646082c4127ad8.png">
                        </div>

                        <a class="filea btn btn-sm btn-primary btn-block" href="javascript:void(0);">
                            上传标识
                            <input class="btn-file" type="file" id="up_img1" name="web_logo_1">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-5 cor-gray87"><i class="fa fa-exclamation-circle cor-orange text-size18"></i>
                该图片展示位置为VIP首页签约热线上方
            </div>
        </div>
        <div class="form-group interface-bottom col-xs-12">
            <label class="col-sm-1 control-label no-padding-right" for="form-field-1">排序</label>

            <div class="col-sm-1">
                <div class="ace-spinner touch-spinner" style="width: 100px;">
                    <div class="input-group">
                        <input type="text" id="spinner3" name="sort" value="0" class="input-mini spinner-input form-control"  maxlength="3">

                    </div>
                </div>


               {{-- <input type="text" id="form-field-1" placeholder="" class="col-xs-10 col-sm-12" name="footer_copyright" value=" ">--}}
            </div>
            <div class="col-sm-1 cor-gray87">
                <label class="im-close">
                    <input class="ace" type="checkbox" name="open_IM" value="2">
                    <span class="lbl"> 上架 </span>
                </label>
            </div>
        </div>
        <div class="form-group interface-bottom col-xs-12">
            <label class="col-sm-1 control-label no-padding-right" for="form-field-1">套餐内容</label>

            <div class="col-sm-8">
                <span class="btn btn-white aCheck"><i class="red fa  "></i>店铺装修</span>
                <span class="btn btn-white aCheck"><i class="red fa"></i>店铺装修</span>
            </div>
        </div>
        <div class="interface-bottom col-xs-12 txtinput">
            <label class="col-sm-1 control-label no-padding-right" for="form-field-1">时长金额设定</label>

            <div class="col-sm-7">
                <table class="" align="left" width="70%">
                    <tbody id="getTr">
                        <tr>
                            <td style="width: 264px">
                                <input type="number" value=""  datatype="*" class="inputxt" /> 个/月
                            </td>
                            <td style="width: 284px">
                                金额：<input type="number"  datatype="*" value=""  class="inputxt"/> 元
                            </td>
                            <td>
                                <a class="btn btn-xs btn-info" href="javascript:;" id="addTr">添加</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="clearfix row bg-backf5 padding20 mg-margin12">
                <div class="col-xs-12">
                    <div class="col-sm-1 text-right"></div>
                    <div class="col-sm-10"><button id="sub" type="submit" class="btn btn-sm btn-primary">提交</button></div>
                </div>
            </div>
        </div>
    </div>
</form>
{!! Theme::asset()->container('custom-css')->usepath()->add('backstage', 'css/backstage/backstage.css') !!}
{!! Theme::asset()->container('specific-js')->usepath()->add('jquery.webui-popover', '/plugins/jquery/css/jquery.webui-popover.min.css') !!}
{!! Theme::asset()->container('custom-js')->usePath()->add('addPackage', 'js/doc/addPackage.js') !!}
{!! Theme::asset()->container('specific-js')->usePath()->add('fuelux.spinner.min.js', 'plugins/ace/js/fuelux/fuelux.spinner.min.js') !!}
{!! Theme::asset()->container('specific-css')->usepath()->add('validform-css','plugins/jquery/validform/css/style.css') !!}
{!! Theme::asset()->container('specific-js')->usepath()->add('validform-js','plugins/jquery/validform/js/Validform_v5.3.2_min.js') !!}
{{--{!! Theme::asset()->container('custom-js')->usepath()->add('uploadimg', 'js/doc/uploadimg.js') !!}
{!! Theme::widget('uploadimg')->render() !!}--}}
