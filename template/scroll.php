<div class="chapter-nav-container">
  <div class="chapter-nav" style="white-space: nowrap; overflow-x: scroll; padding: 8px;">
    <form method="POST" style="display: inline;">
      <button type="submit" name="first">Chap Đầu</button>
    </form>
    <form method="POST" style="display: inline;">
      <button type="submit" name="minus">Chap Trước</button>
    </form>
    <form method="POST" style="display: inline;">
      <button type="submit" name="plus">Chap Sau</button>
    </form>
    <form method="POST" style="display: inline;">
      <button type="submit" name="last">Chap Cuối</button>
    </form>
    <form method="POST" style="display: inline;">
    <button type="submit">Chap Hiện Tại : <?php echo $_SESSION['count']; ?></button>
    </form>
  </div>
</div>


<style>
  .chapter-nav-container {
    position: fixed;
    top: 88px;
    left: 0;
    right: 0;
    background-color: #333;
    z-index: 999;
    display: flex;
    justify-content: center;
    /* Thêm thuộc tính canh chỉnh nút */
    align-items: flex-end;
    padding-bottom: 5px;
  }
  button {
    white-space: nowrap;
    font-size: 14px;
    padding: 5px 10px;
    margin: 0 5px;
    border: none;
    border-radius: 3px;
    background-color: #555;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }
  button:hover {
    background-color: #777;
  }
  .chapter-nav {
    display: flex;
    justify-content: center;
  }
  .chapter-nav::-webkit-scrollbar {
    height: 1px;
    background-color: #333;
  }
  .chapter-nav::-webkit-scrollbar-thumb {
    border-radius: 10px;
    background-color: #666;
  }
  
</style>

<script>
  window.addEventListener("scroll", function() {
    var chapterNavContainer = document.querySelector(".chapter-nav-container");
    if (window.pageYOffset >= 88) {
      chapterNavContainer.style.top = "0";
    } else {
      chapterNavContainer.style.top = "88px";
    }
  });
</script>