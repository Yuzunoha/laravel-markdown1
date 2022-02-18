const p = console.log;

const main = () => {
  const codes = document.querySelectorAll("[class^='lang']"); // langから始まるクラス
  for (const code of codes) {
    const pre = code.parentNode;
    pre.textContent = code.textContent; // codeタグは消える
    pre.classList.add('prettyprint', 'linenums');
  }
};

main();
