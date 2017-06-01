
var boot = {
	init: function(){
		layer.config({
		    extend: 'extend/layer.ext.js'
		});

		$(document).on('click','.js-del-article',function(){
			layer.open({
			    type: 1, 
			    skin: 'layer-default',
			    title: '删除文章',
			    content: $('.delConfirm'), //这里content是一个普通的String
			    area: ['350px'],
			    closeBtn: 2,
			    btn: ['确定', '取消'],
			    yes: function(index, layero){
			    	alert('删除');
			    },cancel: function(index){ 
					alert('不删除');
			    }
			});
		}).on('click','.js-updown',function(){
			$(this).parent().find('.sub-class-list').slideToggle();
		});

         var arcContent = $('.art-content');
         arcContent.each(function(index,value){
         	$clamp(arcContent[index], {clamp: 10, useNativeClamp: false});
         });
        
	}
}

boot.init();