if($('embed').length > 0) {
$('embed').replaceWith(function() {
var src = $(this).attr('src');
$(this).attr({"src": "", "play": "false", "autostart": "false"});
var ph = '<audio controls="controls" src="' + src + '"></audio>';
return ph;
});

$.xload('plugin/plyr/plyr.js', function() {
xiuno_load_css('plugin/plyr/plyr.css');
plyr.setup({autoplay: true,
i18n: {
    restart:            "重新播放",
    rewind:             "后退 {seektime} 秒",
    play:               "播放",
    pause:              "暂停",
    forward:            "快进 {seektime} 秒",
    buffered:           "缓冲",
    currentTime:        "当前时长",
    duration:           "持续时间",
    volume:             "音量",
    toggleMute:         "切换静音",
    toggleCaptions:     "切换字幕",
    toggleFullscreen:   "切换全屏"
}
});
});

}