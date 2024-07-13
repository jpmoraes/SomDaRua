function classificar(x) {
  x.max = x.max || 5;
  x.min = x.min || 0;
  x.min = Math.min(x.min, x.max);
  x.disabled = x.disabled || false;

  x.target.classList.add("elemento");
  
  for (let i = 1; i <= x.max; i++) {
    let s = document.createElement("div");
    s.className = "star";
    x.target.appendChild(s);

    if (i <= x.min) {
      s.classList.add("on");
    }

    if (!x.disabled) {
      s.onmouseover = () => {
        let all = x.target.getElementsByClassName("star");
        for (let j = 0; j < all.length; j++) {
          all[j].classList.toggle("onp", j < i && i === 1);
          all[j].classList.toggle("onr", j < i && i === 2);
          all[j].classList.toggle("onm", j < i && i === 3);
          all[j].classList.toggle("onb", j < i && i === 4);
          all[j].classList.toggle("ono", j < i && i === 5);

          if (j >= i) {
            all[j].classList.remove("onp", "onr", "onm", "onb", "ono");
          }
        }
      };

      s.onmouseout = () => {
        let out = x.target.getElementsByClassName("star");
        for (let y = 0; y < out.length; y++) {
          out[y].classList.remove("onp", "onr", "onm", "onb", "ono");
        }
      };

      if (x.click) {
        s.onclick = () => {
          x.click(i);
          s.onmouseout = null;
          let off = x.target.getElementsByClassName("star");
          for (let z = 0; z < off.length; z++) {
            off[z].classList.add("off");
          }
        };
      }
    }
  }
}

classificar({
  target: document.getElementById("avaliar"),
  max: 5,
  min: 0,
  click: (stars) => {
    document.getElementById('msg').innerHTML = `Você avaliou com ${stars} ${stars === 1 ? 'estrela' : 'estrelas'}!`;
    document.getElementById('notas').value = stars;
    document.getElementById('btn').innerHTML = "<button type='submit'> Enviar </button>";
  }
});