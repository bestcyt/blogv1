{{--footer--}}
<footer id="footer" class="app-footer" role="footer">
    <div class="wrapper b-t bg-light">
      <span class="pull-right hidden-xs">
            <a target="blank" href="#">网站地图</a>
      </span>
        &copy;&nbsp;2019 Copyright&nbsp;由 <a href="{{ env('APP_URL') }}" data-pjax>bestcyt</a>   强力驱动    </div>
    {{--<script type="text/template" id="tmpl-customizer">--}}
    {{--<div class="settings panel panel-default setting_body_panel" aria-hidden="true">--}}
    {{--<button class="btn btn-default no-shadow pos-abt" data-toggle="tooltip" data-placement="left" data-original-title="设置" data-toggle-class=".settings=active, .settings-icon=animate-spin">--}}
    {{--<i class="fontello fontello-gear settings-icon"></i>--}}
    {{--</button>--}}
    {{--<div class="panel-heading">--}}
    {{--<button class="pull-right btn btn-xs btn-rounded btn-danger" name="reset" data-toggle="tooltip" data-placement="top" data-original-title="恢复默认值" >重置</button>--}}
    {{--设置		</div>--}}
    {{--<div class="setting_body">--}}
    {{--<div class="panel-body">--}}
    {{--<# for ( var keys = _.keys( data.sections.settings ), i = 0, name; keys.length > i; ++i ) { #>--}}
    {{--<div<# if ( i !== ( keys.length - 1 ) ) print( ' class="m-b-sm"' ); #>>--}}
    {{--<label class="i-switch bg-info pull-right">--}}
    {{--<input type="checkbox" name="{{ keys[i] }}" value="1"<# if ( data.defaults[keys[i]] ) print( ' checked="checked"' ); #> />--}}
    {{--<i></i>--}}
    {{--</label>--}}
    {{--{{ data.sections.settings[keys[i]] }}--}}
    {{--</div>--}}
    {{--<# } #>--}}
    {{--</div>--}}
    {{--<div class="wrapper b-t b-light bg-light lter r-b">--}}
    {{--<div class="row row-sm">--}}
    {{--<div class="col-xs-6">--}}
    {{--<#--}}
    {{--_.each( data.sections.colors, function( color, i ) {--}}
    {{--var newColumnBefore = ( i % 7 ) === 6;--}}
    {{--#>--}}
    {{--<label class="i-checks block<# if ( !newColumnBefore ) print( ' m-b-sm' ); #>">--}}
    {{--<input type="radio" name="color" value="{{ i }}"<# if ( data.defaults['color'] === i ) print( ' checked="checked"' ); #> />--}}
    {{--<span class="block bg-light clearfix pos-rlt">--}}
    {{--<span class="active pos-abt w-full h-full bg-black-opacity text-center">--}}
    {{--<i class="fontello fontello-check text-md text-white m-t-xs"></i>--}}
    {{--</span>--}}
    {{--<b class="{{ color.navbarHeader }} header"></b>--}}
    {{--<b class="{{ color.navbarCollapse }} header"></b>--}}
    {{--<b class="{{ color.aside.replace( ' b-r', '' ) }}"></b>--}}
    {{--</span>--}}
    {{--</label>--}}
    {{--<#--}}
    {{--if ( newColumnBefore && ( i + 1 ) < data.sections.colors.length )--}}
    {{--print( '</div><div class="col-xs-6">' );--}}
    {{--} );--}}
    {{--#>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</script>--}}

    <div class="topButton panel panel-default">
        <button id="goToTop" class="btn btn-default no-shadow pos-abt hide">
            <i class="fontello fontello-chevron-circle-up" aria-hidden="true"></i>
        </button>
    </div>
</footer>