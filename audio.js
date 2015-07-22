var audioReady = function(){
	var music_list = ["jiangnan","luzhouyue","daoxiang",
					  "congcongnanian","qinghuaci"];
	var music_info = ["江南 -- 林俊杰","庐州月 -- 许嵩","稻香 -- 周杰伦","匆匆那年 -- 王菲","青花瓷 -- 周杰伦"]
	var mus_path = "music/";
	var pic_path = "pic/";
	var music_num = music_list.length;
	var audio = $('#audio')[0];
	var info_pic = document.getElementById("info-pic");
	var info_text = document.getElementById("info-text");
	var index = 0;
	audio.src= mus_path+music_list[index]+".mp3";
	audio.play();

	var changeMusic = function(){
		audio.src = mus_path+music_list[index]+".mp3";
		info_pic.src = pic_path+music_list[index]+".png";
		info_text.innerHTML= "正在播放： "+music_info[index];
		audio.play();
	};
	

	$('#next').click(function(){
		audio.pause();
		if(index=== music_num-1){
			index = 0;
		} else {
			index++;
		}
		changeMusic();
	});

	$('#prev').click(function(){
		audio.pause();
		if(index=== 0){
			index = music_num-1;
		} else {
			index--;
		}
		changeMusic();
	});

	var item = $('#li0');
	item.click(function(){
		index = 0;
		changeMusic();
	});
	var item = $('#li1');
	item.click(function(){
		index = 1;
		changeMusic();
	});
	var item = $('#li2');
	item.click(function(){
		index = 2;
		changeMusic();
	});
	var item = $('#li3');
	item.click(function(){
		index = 3;
		changeMusic();
	});
	var item = $('#li4');
	item.click(function(){
		index = 4;
		changeMusic();
	});

	audio.addEventListener("ended",function(){
		$('#next').click();
	});

}



