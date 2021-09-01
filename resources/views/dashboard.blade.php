<x-app-layout>
    <div class="container-fluid mt-4">
      
        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5">{{\App\Models\Category::count()}} Kategori</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="{{route('kategoriler.index')}}">
                <span class="float-left">Tüm Kategorileri Göster</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-clipboard"></i>
                </div>
                <div class="mr-5">{{\App\Models\Post::count()}} Yazı</div>
              </div>

              <a class="card-footer text-white clearfix small z-1" href="{{ route('yazilar.index') }}">
                <span class="float-left">Tüm Yazıları Göster</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list-alt"></i>
                </div>
                <div class="mr-5">{{\App\Models\Menu::count()}} Menü</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="{{ route('menu.index') }}">
              <span class="float-left">Tümünü Göster</span>
              <span class="float-right">
                <i class="fas fa-angle-right"></i>
              </span>
            </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-users"></i>
                </div>
                <div class="mr-5">{{\App\Models\User::count()}} Kullanıcı</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">Tümünü Göster</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>
      
      
       
      
      </div>
      <!-- /.container-fluid -->
</x-app-layout>
