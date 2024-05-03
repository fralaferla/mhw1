function myEventListener(){
  const picSources=["IMG_3918.JPEG",'IMG_3971.JPEG','IMG_4192.JPEG','IMG_4329.JPEG','IMG_4336.JPEG'];
  let rand= Math.floor(Math.random()*picSources.length);
  const img=document.querySelector('button img');
  img.src=picSources[rand];
}