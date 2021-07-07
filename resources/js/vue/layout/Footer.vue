<template>
  <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
    <div class="container text-center">
      <small>Copyright &copy; Your Website</small>
      <div class="row">
        <div class="col-8">
          <div class="row">
            <img src="/icons/footer.JPG" width="200" height="60" alt="" />
          </div>
          <div class="row" style="text-align: justify">
            © {{ new Date().getUTCFullYear() }} PropertyHunter.com.my. All Right Reserved.<br />
            East Malaysia's Leading Property Portal, Magazine & Expo. Wholly
            owned by Maxx Media(S) Sdn. Bhd.
          </div>
        </div>
        <div class="col-4">
          <ul class="list-unstyled list-inline text-center pr-4">
            <li class="list-inline-item">
              <a class="btn-floating btn-fb mx-1">
                <i class="fa fa-facebook-f fa-2x"> </i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-gplus mx-1">
                <i class="fa fa-google-plus-g"> </i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-tw mx-1">
                <i class="fa fa-twitter fa-2x"> </i>
              </a>
            </li>

            <li class="list-inline-item">
              <a class="btn-floating btn-li mx-1">
                <i class="fa fa-instagram fa-2x"> </i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
</template>

<style>
#sticky-footer {
  flex-shrink: none;
  color: black;
  position: relative;
  bottom: 0;
  width: 100%;
}
</style>
