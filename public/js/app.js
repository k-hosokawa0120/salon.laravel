// スマホナビの表示・非表示

// $(function() {
//   const hum = $('.header__hamburger, .header__nav-hamburger-close');
//   const nav = $('.header__nav-hamburger');
//   hum.on('click', function(){
//      nav.toggleClass('toggle');
//   });
// });

// window.onload = function(){
  /** jQueryの処理 */
  $(function() {
  const hum = $('.header__hamburger, .header__nav-hamburger-close');
  const nav = $('.header__nav-hamburger');
  console.log(hum);
  hum.on('click', function(){
     nav.toggleClass('toggle');
  });
});
// };

// $(function() {
//   const hum = $('.header__hamburger, .header__nav-hamburger-close');
//   const nav = $('.header__nav-hamburger');
//   console.log(hum);
// });

  // const hum = $('.header__hamburger, .header__nav-hamburger-close');
  // const nav = $('.header__nav-hamburger');
  // $('hum').on('click', function(){
  //   nav.toggleClass('toggle');
  // })


// function delete_alert(e){
//   if(!window.confirm('削除します。よろしいですか？(この操作は取り消せません）')){
//      window.alert('キャンセルされました'); 
//      return false;
//   }
//   document.deleteform.submit();
// };
