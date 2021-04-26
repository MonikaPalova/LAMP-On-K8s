function onInit() {
  _fillNav();
}

function _fillNav() {
  let sections = document.getElementsByTagName("section");

  for (section of sections) {
    _insertSectionInNav(section.id, section.firstElementChild.innerText);
  }
}

function _insertSectionInNav(sectionId, sectionHeader) {
  let navElement = document.getElementsByTagName("nav")[0];

  let linkToSection = document.createElement("a");
  linkToSection.href = "#" + section.id;
  linkToSection.innerText = sectionHeader;

  navElement.appendChild(linkToSection);
}
