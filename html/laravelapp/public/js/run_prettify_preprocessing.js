/**
 * language-PHp -> lang-php
 * language-js -> lang-js
 */
const convertLanguageClass = (str) => {
  return 'lang-' + str.trim().split('-')[1].toLowerCase();
};

const codes = document.querySelectorAll("[class^='lang']"); // langから始まるクラス
for (const code of codes) {
  const newLangClass = convertLanguageClass(code.classList[0]);
  const pre = code.parentNode;
  pre.textContent = code.textContent; // codeタグは消える
  pre.classList.add('prettyprint', newLangClass, 'linenums');
}
