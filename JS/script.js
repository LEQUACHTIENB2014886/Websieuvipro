const modal = document.querySelector(".js-modal");
const iconclose = document.querySelector(".js-modal-close");
const container = document.querySelector(".js-modal-container");

// Đăng ký tài khoản
var accoutList = JSON.parse(localStorage.getItem("accoutList"));
if (accoutList == null) {
  accoutList = [];
}

var inforAccount = JSON.parse(localStorage.getItem("inforAccount"));
if (inforAccount == null) {
  var inforAccount = [];
  inforAccount.length = accoutList.length;
}

for (var i = 0; i < inforAccount.length; i++) {
  if (inforAccount[i] == null) {
    inforAccount[i] = [];
  }
}

var accountActives = JSON.parse(localStorage.getItem("accountActives"));
if (accountActives == null) {
  accountActives = [];
}
console.log(accoutList);

function taoId() {
  var id =
    Math.random().toString().substr(2, 10) + "_" + String(new Date().getTime());
  return id;
}

function accountUser(id, email, password, username) {
  this.email = email;
  this.password = password;
  this.username = username;
  if (id == null) {
    this.id = taoId();
  } else {
    this.id = id;
  }
}

function accoutActive(email, password) {
  this.email = email;
  this.password = password;
}

function createAccount() {
  var email = document.querySelector("#emailReg").value;
  var username = document.querySelector("#usernameReg").value;
  var password = document.querySelector("#passwordReg").value;
  var password_confirm = document.querySelector("#repasswordReg").value;
  var input_register = document.querySelectorAll(".register");

  for (var i = 0; i < input_register.length; i++) {
    input_register[i].classList.remove("input-error");
    input_register[i].parentElement.querySelector(".error-msg").innerHTML = "";
  }

  if (email.trim() == "") {
    document.querySelector("#emailReg").classList.add("input-error");
    document
      .querySelector("#emailReg")
      .parentElement.querySelector(".error-msg").innerHTML =
      "#ERROR";
  }

  if (username.trim() == "") {
    document.querySelector("#usernameReg").classList.add("input-error");
    document
      .querySelector("#usernameReg")
      .parentElement.querySelector(".error-msg").innerHTML =
      "#ERROR";
  }

  var checkEmail;
  var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if (email.match(regex)) {
    checkEmail = true;
  } else {
    checkEmail = false;
  }

  if (email.trim() != "" && checkEmail == false) {
    document.querySelector("#emailReg").classList.add("input-error");
    document
      .querySelector("#emailReg")
      .parentElement.querySelector(".error-msg").innerHTML =
      "#ERROR";
  }

  if (password.trim() == "") {
    document.querySelector("#passwordReg").classList.add("input-error");
    document
      .querySelector("#passwordReg")
      .parentElement.querySelector(".error-msg").innerHTML =
      "#ERROR";
  }

  if (password_confirm.trim() == "") {
    document.querySelector("#repasswordReg").classList.add("input-error");
    document
      .querySelector("#repasswordReg")
      .parentElement.querySelector(".error-msg").innerHTML =
      "#ERROR";
  }

  if (password.trim().length < 8 && password.trim().length > 0) {
    document.querySelector("#passwordReg").classList.add("input-error");
    document
      .querySelector("#passwordReg")
      .parentElement.querySelector(".error-msg").innerHTML =
      "#ERROR";
  }

  if (password.trim().length >= 8) {
    if (password_confirm != "" && password_confirm != password) {
      document.querySelector("#repasswordReg").classList.add("input-error");
      document
        .querySelector("#repasswordReg")
        .parentElement.querySelector(".error-msg").innerHTML =
        "#ERROR";
    }
  }

  var check = true;
  for (var i = 0; i < accoutList.length; i++) {
    var currentAccount = accoutList[i];
    if (email == currentAccount.email) {
      check = false;
      document.querySelector("#emailReg").classList.add("input-error");
      document
        .querySelector("#emailReg")
        .parentElement.querySelector(".error-msg").innerHTML =
        "#ERROR";
    }
  }

  var checkUsername = true;
  for (var i = 0; i < accoutList.length; i++) {
    var currentAccount = accoutList[i];
    if (username == currentAccount.username) {
      checkUsername = false;
      document.querySelector("#usernameReg").classList.add("input-error");
      document
        .querySelector("#usernameReg")
        .parentElement.querySelector(".error-msg").innerHTML =
        "#ERROR";
    }
  }
  if (
    checkEmail == true &&
    checkUsername == true &&
    username.trim() != "" &&
    password.trim() != "" &&
    password_confirm.trim().length >= 8 &&
    password_confirm.trim() === password.trim() &&
    check == true
  ) {
    var newAccount = new accountUser(null, email, password, username);
    accoutList.push(newAccount);
    var jsonAccountList = JSON.stringify(accoutList);
    localStorage.setItem("accoutList", jsonAccountList);
    document.querySelector("#emailReg").value = "";
    document.querySelector("#passwordReg").value = "";
    document.querySelector("#repasswordReg").value = "";
    document.querySelector("#usernameReg").value = "";
    Swal.fire("", "Bạn đã đăng ký tài khoản thành công !", "success");
  }
}
// Đăng nhập

function checkIndex() {
  var account = JSON.parse(localStorage.getItem("accountActives"));
  if (account == null) {
    account = [];
  }
  if (account.length == 0) {
    return undefined;
  } else if (account.length == 1) {
    for (var i = 0; i < accoutList.length; i++) {
      var currentAccount = accoutList[i];
      if (account[0].email == currentAccount.email) {
        var thisAccount = currentAccount;
      }
    }
  }
  return accoutList.indexOf(thisAccount);
}

function loginAccount() {
  var email = document.getElementById("emailLog").value;
  var password = document.getElementById("passwordLog").value;
  var input_login = document.querySelectorAll(".login");

  for (var i = 0; i < input_login.length; i++) {
    input_login[i].classList.remove("input-error");
    input_login[i].parentElement.querySelector(".error-msg").innerHTML = "";
  }

  if (email.trim() == "") {
    document.getElementById("emailLog").classList.add("input-error");
    document
      .getElementById("emailLog")
      .parentElement.querySelector(".error-msg").innerHTML =
      "#error";
  }

  if (password.trim() == "") {
    document.getElementById("passwordLog").classList.add("input-error");
    document
      .getElementById("passwordLog")
      .parentElement.querySelector(".error-msg").innerHTML =
      "#error";
  }

  var checkEmail = false;
  var checkPassword = false;
  for (var i = 0; i < accoutList.length; i++) {
    var currentAccount = accoutList[i];
    if (email == currentAccount.email) {
      checkEmail = true;
      if (password == currentAccount.password) {
        checkPassword = true;
      }
    }
  }
  if (checkEmail == false && email.trim().length > 0) {
    document.getElementById("emailLog").classList.add("input-error");
    document
      .getElementById("emailLog")
      .parentElement.querySelector(".error-msg").innerHTML =
      "Email error";
  }
  if (checkEmail == true) {
    if (checkPassword == false && password.trim().length > 0) {
      document.getElementById("passwordLog").classList.add("input-error");
      document
        .getElementById("passwordLog")
        .parentElement.querySelector(".error-msg").innerHTML =
        "Sai pass";
    }
  }
  if (checkEmail == true && checkPassword == true) {
    document.getElementById("emailLog").value = "";
    document.getElementById("passwordLog").value = "";
    for (var i = 0; i < accoutList.length; i++) {
      var currentAccount = accoutList[i];
      if (email == currentAccount.email) {
        var thisAccount = currentAccount;
      }
    }
    var accountIn = new accoutActive(email, password);
    accountActives.push(accountIn);
    localStorage.setItem("accountActives", JSON.stringify(accountActives));

    var links = document.querySelectorAll(".no-user");
    for (var i = 0; i < links.length; i++) {
      links[i].classList.add("close");
    }
    Swal.fire("Đăng nhập thành công!");
  }
}
function checkAccountStatus() {
  var account = JSON.parse(localStorage.getItem("accountActives"));
  if (account == null) {
    account = [];
  }
  console.log(account);
  if (account.length == 0) {
  }
  if (account.length != 0) {
    var links = document.querySelectorAll(".no-user");
    for (var i = 0; i < links.length; i++) {
      links[i].classList.add("close");
    }

    for (var i = 0; i < accoutList.length; i++) {
      var currentAccount = accoutList[i];
      if (account[0].email == currentAccount.email) {
        var thisAccount = currentAccount;
      }
    }
  }
}

checkAccountStatus();

function renderLoginRegister() {
  var cartListItem = getCartListItem();
  var cartListItem2 = cartListItem;
  var index = checkIndex();
  inforAccount[index] = cartListItem2;
  localStorage.setItem("inforAccount", JSON.stringify(inforAccount));

  var links = document.querySelectorAll(".no-user");
  for (var i = 0; i < links.length; i++) {
    links[i].classList.remove("close");
  }
  document.querySelector(".user").innerHTML = ``;

  var arrayAccount = [];
  localStorage.setItem("accountActives", JSON.stringify(arrayAccount));
}

function product(id, img, name, price, about) {
  this.id = id;
  this.img = img;
  this.name = name;
  this.price = price;
  this.about = about;
}
//
function cartItem(id, number) {
  this.id = id;
  this.number = number;
}

var keyLocalStorage = "cartListItem";

//cac inner
// .user oce
// main cart-emty oce
// main cart oce
// .search_result oce
//

const header = document.querySelector("header");
const mobilebtn = document.querySelector(".menu-mobile-btn");
const nav = document.querySelector("#nav");
const lo = document.querySelector(".logo");

// var menuItems = document.querySelectorAll('#nav li a')
// for(var i =0; i < menuItems.length; i++ ){
//     var menuItem = menuItems[i];
//     menuItem.onclick = function(e) {
//         var isParentMenu = this.nextElementSibling && this.nextElementSibling.classList.contains('subnav');
//         console.log(isParentMenu);
//         if (isParentMenu){
//             e.preventDefault();
//         } else header.style.height = null;
//     }
// }

// lienhe
function frmValidate() {
  var frm = document.forms["lienhe"];
  var hoten = frm.hoten;
  var sdt = frm.sdt;
  var nd = frm.noidung;

  //ho ten
  if (hoten.value.length == 0) {
    alert("#Họ Tên");
    hoten.focus();
    return false;
  }

  //SDT
  if (sdt.value.length != 10 || sdt.value.length == 0) {
    alert("Hãy điền số điện thoại đủ 10 số!");
    sdt.focus();
    return false;
  }
  // nd
  if (nd.value.length == 0) {
    alert("Hãy điền nội dung!");
    nd.focus();
    return false;
  }

  alert("Gửi thông tin thành công!");
  return true;
}

// tim kiem
const search = document.querySelector(".search_wrapper");
const searchInput = document.querySelector(".search-input");
const searchButton = document.querySelector(".search_button");
const searchResult = document.querySelector(".search_result");

const onSearch = (keyword) => {
  outsearch();
  var keywordsearch = keyword.trim();
  console.log(keywordsearch);
  product_list.forEach((productn) => {
    if (keywordsearch != null) {
      if (
        productn.name.toLowerCase().indexOf(keywordsearch.toLowerCase()) !== -1
      )
        searchResult.innerHTML += `
          <div onclick="renderProductDetail(${
            productn.id
          })" class="search_product">
              <img src="${productn.img}"/>
              <div class="namenprice">
              <div class="search_product_name">
                  ${productn.name}
              </div>
              <div class="search_product_price">
                  ${parseInt(productn.price).toLocaleString()} ₫
              </div>
              </div>    
          </div>
          `;
    }
  });
};
