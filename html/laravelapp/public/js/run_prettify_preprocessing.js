const p = console.log;

const main = () => {
  const elements = document.querySelectorAll("[class^='lang']"); // langから始まるクラス
  for (const element of elements) {
    element.classList.add('prettyprint');
  }
  alert('呼ばれた');
};

main();
