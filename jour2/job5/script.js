let footer = document.getElementsByTagName('footer')[0];
window.addEventListener('scroll', function(event)
{
      let windowscroll = document.body.scrollTop || document.documentElement.scrollTop;
      let height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
      let scrolled = (windowscroll / height) *100;

      footer.style.width = scrolled + "%";
}) 