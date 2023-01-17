let footer = document.getElementsByTagName('footer')[0];
window.addEventListener('scroll', function(event)
{
      let windowscroll = document.body.scrollTop || document.documentElement.scrollTop;
      let height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
      let scrolled = (windowscroll / height) *100;

      footer.style.width = scrolled + "%";


if (scrolled >= 0 && scrolled <= 25) {
      footer.style.backgroundColor = "rgb(0, 247, 255)";
    } else if (scrolled > 25 && scrolled <= 50) {
      footer.style.backgroundColor = "rgb(226, 139, 0)";
    } else if (scrolled > 50 && scrolled <= 75) {
      footer.style.backgroundColor = "rgb(226, 208, 0)";
    } else if (scrolled > 75 && scrolled <= 100) {
      footer.style.backgroundColor = "rgb(120, 208, 0)";
    }
  }) 