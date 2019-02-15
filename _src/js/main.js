$.map($('a'), function(node,index){
    var src = $(node);
    if ( src.prop('hostname') !== window.location.hostname && src.prop('target') !== '_self' ) {
        src.prop('target', '_blank');
    }
});