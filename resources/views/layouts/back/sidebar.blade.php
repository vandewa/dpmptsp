  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-info elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
          <img src="{{ asset('logo.png') }}" alt="Diaspora" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">DPMPTSP Wsb</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="pb-3 mt-3 mb-3 user-panel d-flex">
              <div class="image">
                  <img src="{{ asset('soul.png') }}" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                  <a href="#" class="d-block">{{ auth()->user()->name ?? '-' }}</a>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item">
                      <a href="{{ route('dashboard') }}"
                          class="nav-link {{ Request::segment(1) == 'dashboard' ? 'active' : '' }}">
                          <i class="nav-icon fas fa-home"></i>
                          <p>
                              Dashboard
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('berita.index') }}"
                          class="nav-link {{ Request::segment(1) == 'berita' ? 'active' : '' }}">
                          <i class="nav-icon far fa-newspaper"></i>
                          <p>
                              Berita
                          </p>
                      </a>
                  </li>

                  <li
                      class="nav-item 
                  {{ Request::segment(1) == 'isi-menu' ? ' menu-open' : '' }}
                  {{ Request::segment(1) == 'menu' ? ' menu-open' : '' }}
                  {{ Request::segment(1) == 'lhkasn' ? ' menu-open' : '' }}
                  {{ Request::segment(1) == 'perjanjian-kinerja' ? ' menu-open' : '' }}
                  {{ Request::segment(1) == 'calk' ? ' menu-open' : '' }}
                  {{ Request::segment(1) == 'laporan-aset' ? ' menu-open' : '' }}
                  {{ Request::segment(1) == 'renja' ? ' menu-open' : '' }}
                  {{ Request::segment(1) == 'renstra' ? ' menu-open' : '' }}
                  {{ Request::segment(1) == 'pobl' ? ' menu-open' : '' }}
                  {{ Request::segment(1) == 'program-kegiatan' ? ' menu-open' : '' }}
                  {{ Request::segment(1) == 'realisasi-anggaran' ? ' menu-open' : '' }}
                  {{ Request::segment(1) == 'lkjip' ? ' menu-open' : '' }}
                  {{ Request::segment(1) == 'dpa' ? ' menu-open' : '' }}
                  {{ Request::segment(1) == 'rka' ? ' menu-open' : '' }}
                  {{ Request::segment(1) == 'neraca' ? ' menu-open' : '' }}
                  {{ Request::segment(1) == 'daftar-informasi-publik' ? ' menu-open' : '' }}
                  ">
                      <a href="#"
                          class="nav-link
                  {{ Request::segment(1) == 'isi-menu' ? ' active' : '' }}
                  {{ Request::segment(1) == 'menu' ? ' active' : '' }}
                  {{ Request::segment(1) == 'lhkasn' ? ' active' : '' }}
                  {{ Request::segment(1) == 'perjanjian-kinerja' ? ' active' : '' }}
                  {{ Request::segment(1) == 'calk' ? ' active' : '' }}
                  {{ Request::segment(1) == 'laporan-aset' ? ' active' : '' }}
                  {{ Request::segment(1) == 'renja' ? ' active' : '' }}
                  {{ Request::segment(1) == 'renstra' ? ' active' : '' }}
                  {{ Request::segment(1) == 'pobl' ? ' active' : '' }}
                  {{ Request::segment(1) == 'program-kegiatan' ? ' active' : '' }}
                  {{ Request::segment(1) == 'realisasi-anggaran' ? ' active' : '' }}
                  {{ Request::segment(1) == 'lkjip' ? ' active' : '' }}
                  {{ Request::segment(1) == 'dpa' ? ' active' : '' }}
                  {{ Request::segment(1) == 'rka' ? ' active' : '' }}
                  {{ Request::segment(1) == 'neraca' ? ' active' : '' }}
                  {{ Request::segment(1) == 'daftar-informasi-publik' ? 'active' : '' }}

                      ">
                          <i class="nav-icon fas fa-list"></i>
                          <p>
                              Menu
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('menu.index') }}"
                                  class="nav-link {{ Request::segment(1) == 'menu' ? 'active' : '' }}">
                                  @if (Request::segment(1) == 'menu')
                                      <i class="far fa-dot-circle nav-icon ml-3"></i>
                                  @else
                                      <i class="far fa-circle nav-icon ml-3"></i>
                                  @endif
                                  <p>Menu</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('isi.menu.index') }}"
                                  class="nav-link {{ Request::segment(1) == 'isi-menu' ? 'active' : '' }}">
                                  @if (Request::segment(1) == 'isi-menu')
                                      <i class="far fa-dot-circle nav-icon ml-3"></i>
                                  @else
                                      <i class="far fa-circle nav-icon ml-3"></i>
                                  @endif
                                  <p>Isi Menu</p>
                              </a>
                          </li>
                          <li
                              class="nav-item 
                          {{ Request::segment(1) == 'lhkasn' ? ' menu-open' : '' }}
                          {{ Request::segment(1) == 'perjanjian-kinerja' ? ' menu-open' : '' }}
                          {{ Request::segment(1) == 'calk' ? ' menu-open' : '' }}
                          {{ Request::segment(1) == 'laporan-aset' ? ' menu-open' : '' }}
                          {{ Request::segment(1) == 'renja' ? ' menu-open' : '' }}
                          {{ Request::segment(1) == 'renstra' ? ' menu-open' : '' }}
                          {{ Request::segment(1) == 'pobl' ? ' menu-open' : '' }}
                          {{ Request::segment(1) == 'program-kegiatan' ? ' menu-open' : '' }}
                          {{ Request::segment(1) == 'realisasi-anggaran' ? ' menu-open' : '' }}
                          {{ Request::segment(1) == 'lkjip' ? ' menu-open' : '' }}
                          {{ Request::segment(1) == 'dpa' ? ' menu-open' : '' }}
                          {{ Request::segment(1) == 'rka' ? ' menu-open' : '' }}
                          {{ Request::segment(1) == 'neraca' ? ' menu-open' : '' }}
                          {{ Request::segment(1) == 'neraca' ? ' menu-open' : '' }}
                          ">
                              <a href="#"
                                  class="nav-link
                              {{ Request::segment(1) == 'lhkasn' ? ' active' : '' }}
                              {{ Request::segment(1) == 'perjanjian-kinerja' ? ' active' : '' }}
                              {{ Request::segment(1) == 'calk' ? ' active' : '' }}
                              {{ Request::segment(1) == 'laporan-aset' ? ' active' : '' }}
                              {{ Request::segment(1) == 'renja' ? ' active' : '' }}
                              {{ Request::segment(1) == 'renstra' ? ' active' : '' }}
                              {{ Request::segment(1) == 'pobl' ? ' active' : '' }}
                              {{ Request::segment(1) == 'program-kegiatan' ? ' active' : '' }}
                              {{ Request::segment(1) == 'realisasi-anggaran' ? ' active' : '' }}
                              {{ Request::segment(1) == 'lkjip' ? ' active' : '' }}
                              {{ Request::segment(1) == 'dpa' ? ' active' : '' }}
                              {{ Request::segment(1) == 'rka' ? ' active' : '' }}
                              {{ Request::segment(1) == 'neraca' ? ' active' : '' }}
                              ">
                                  <i class="far fa-circle nav-icon ml-3"></i>
                                  <p>
                                      Transparansi Anggarn
                                      <i class="right fas fa-angle-left"></i>
                                  </p>
                              </a>
                              <ul class="nav nav-treeview">
                                  <li class="nav-item {{ Request::segment(1) == 'lhkasn' ? 'active' : '' }}">
                                      <a href="{{ route('lhkasn.index') }}"
                                          class="nav-link {{ Request::segment(1) == 'lhkasn' ? 'active' : '' }}">
                                          @if (Request::segment(1) == 'lhkasn')
                                              <i class="far fa-dot-circle nav-icon ml-5"></i>
                                          @else
                                              <i class="far fa-circle nav-icon ml-5"></i>
                                          @endif
                                          <p>LHKASN</p>
                                      </a>
                                  </li>
                                  <li
                                      class="nav-item {{ Request::segment(1) == 'perjanjian-kinerja' ? 'active' : '' }}">
                                      <a href="{{ route('perjanjian-kinerja.index') }}"
                                          class="nav-link {{ Request::segment(1) == 'perjanjian-kinerja' ? 'active' : '' }}">
                                          @if (Request::segment(1) == 'perjanjian-kinerja')
                                              <i class="far fa-dot-circle nav-icon ml-5"></i>
                                          @else
                                              <i class="far fa-circle nav-icon ml-5"></i>
                                          @endif
                                          <p>P. KINERJA</p>
                                      </a>
                                  </li>
                                  <li class="nav-item {{ Request::segment(1) == 'calk' ? 'active' : '' }}">
                                      <a href="{{ route('calk.index') }}"
                                          class="nav-link {{ Request::segment(1) == 'calk' ? 'active' : '' }}">
                                          @if (Request::segment(1) == 'calk')
                                              <i class="far fa-dot-circle nav-icon ml-5"></i>
                                          @else
                                              <i class="far fa-circle nav-icon ml-5"></i>
                                          @endif
                                          <p>CaLK</p>
                                      </a>
                                  </li>
                                  <li class="nav-item {{ Request::segment(1) == 'laporan-aset' ? 'active' : '' }}">
                                      <a href="{{ route('laporan-aset.index') }}"
                                          class="nav-link {{ Request::segment(1) == 'laporan-aset' ? 'active' : '' }}">
                                          @if (Request::segment(1) == 'laporan-aset')
                                              <i class="far fa-dot-circle nav-icon ml-5"></i>
                                          @else
                                              <i class="far fa-circle nav-icon ml-5"></i>
                                          @endif
                                          <p>LAPORAN ASET</p>
                                      </a>
                                  </li>
                                  <li class="nav-item {{ Request::segment(1) == 'renja' ? 'active' : '' }}">
                                      <a href="{{ route('renja.index') }}"
                                          class="nav-link {{ Request::segment(1) == 'renja' ? 'active' : '' }}">
                                          @if (Request::segment(1) == 'renja')
                                              <i class="far fa-dot-circle nav-icon ml-5"></i>
                                          @else
                                              <i class="far fa-circle nav-icon ml-5"></i>
                                          @endif
                                          <p>RENJA</p>
                                      </a>
                                  </li>
                                  <li class="nav-item {{ Request::segment(1) == 'renstra' ? 'active' : '' }}">
                                      <a href="{{ route('renstra.index') }}"
                                          class="nav-link {{ Request::segment(1) == 'renstra' ? 'active' : '' }}">
                                          @if (Request::segment(1) == 'renstra')
                                              <i class="far fa-dot-circle nav-icon ml-5"></i>
                                          @else
                                              <i class="far fa-circle nav-icon ml-5"></i>
                                          @endif
                                          <p>RENSTRA</p>
                                      </a>
                                  </li>
                                  <li class="nav-item {{ Request::segment(1) == 'pobl' ? 'active' : '' }}">
                                      <a href="{{ route('pobl.index') }}"
                                          class="nav-link {{ Request::segment(1) == 'pobl' ? 'active' : '' }}">
                                          @if (Request::segment(1) == 'pobl')
                                              <i class="far fa-dot-circle nav-icon ml-5"></i>
                                          @else
                                              <i class="far fa-circle nav-icon ml-5"></i>
                                          @endif
                                          <p>POBL</p>
                                      </a>
                                  </li>
                                  <li
                                      class="nav-item
                                          {{ Request::segment(1) == 'program-kegiatan' ? 'active' : '' }}">
                                      <a href="{{ route('program-kegiatan.index') }}"
                                          class="nav-link {{ Request::segment(1) == 'program-kegiatan' ? 'active' : '' }}">
                                          @if (Request::segment(1) == 'program-kegiatan')
                                              <i class="far fa-dot-circle nav-icon ml-5"></i>
                                          @else
                                              <i class="far fa-circle nav-icon ml-5"></i>
                                          @endif
                                          <p>P. KEGIATAN</p>
                                      </a>
                                  </li>
                                  <li
                                      class="nav-item {{ Request::segment(1) == 'realisasi-anggaran' ? 'active' : '' }}">
                                      <a href="{{ route('realisasi-anggaran.index') }}"
                                          class="nav-link {{ Request::segment(1) == 'realisasi-anggaran' ? 'active' : '' }}">
                                          @if (Request::segment(1) == 'realisasi-anggaran')
                                              <i class="far fa-dot-circle nav-icon ml-5"></i>
                                          @else
                                              <i class="far fa-circle nav-icon ml-5"></i>
                                          @endif
                                          <p>R. ANGGARAN</p>
                                      </a>
                                  </li>
                                  <li class="nav-item {{ Request::segment(1) == 'lkjip' ? 'active' : '' }}">
                                      <a href="{{ route('lkjip.index') }}"
                                          class="nav-link {{ Request::segment(1) == 'lkjip' ? 'active' : '' }}">
                                          @if (Request::segment(1) == 'lkjip')
                                              <i class="far fa-dot-circle nav-icon ml-5"></i>
                                          @else
                                              <i class="far fa-circle nav-icon ml-5"></i>
                                          @endif
                                          <p>LKjIP</p>
                                      </a>
                                  </li>
                                  <li class="nav-item {{ Request::segment(1) == 'dpa' ? 'active' : '' }}">
                                      <a href="{{ route('dpa.index') }}"
                                          class="nav-link {{ Request::segment(1) == 'dpa' ? 'active' : '' }}">
                                          @if (Request::segment(1) == 'dpa')
                                              <i class="far fa-dot-circle nav-icon ml-5"></i>
                                          @else
                                              <i class="far fa-circle nav-icon ml-5"></i>
                                          @endif
                                          <p>DPA</p>
                                      </a>
                                  </li>
                                  <li class="nav-item {{ Request::segment(1) == 'rka' ? 'active' : '' }}">
                                      <a href="{{ route('rka.index') }}"
                                          class="nav-link {{ Request::segment(1) == 'rka' ? 'active' : '' }}">
                                          @if (Request::segment(1) == 'rka')
                                              <i class="far fa-dot-circle nav-icon ml-5"></i>
                                          @else
                                              <i class="far fa-circle nav-icon ml-5"></i>
                                          @endif
                                          <p>RKA</p>
                                      </a>
                                  </li>
                                  <li class="nav-item {{ Request::segment(1) == 'neraca' ? 'active' : '' }}">
                                      <a href="{{ route('neraca.index') }}"
                                          class="nav-link {{ Request::segment(1) == 'neraca' ? 'active' : '' }}">
                                          @if (Request::segment(1) == 'neraca')
                                              <i class="far fa-dot-circle nav-icon ml-5"></i>
                                          @else
                                              <i class="far fa-circle nav-icon ml-5"></i>
                                          @endif
                                          <p>NERACA</p>
                                      </a>
                                  </li>
                              </ul>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('daftar-informasi-publik.index') }}"
                                  class="nav-link {{ Request::segment(1) == 'daftar-informasi-publik' ? 'active' : '' }}">
                                  @if (Request::segment(1) == 'daftar-informasi-publik')
                                      <i class="far fa-dot-circle nav-icon ml-3"></i>
                                  @else
                                      <i class="far fa-circle nav-icon ml-3"></i>
                                  @endif
                                  <p>Daftar Informasi Publik</p>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <li
                      class="nav-item 
                  {{ Request::segment(1) == 'sosial-media' ? ' menu-open' : '' }}
                  {{ Request::segment(1) == 'kontak' ? ' menu-open' : '' }}
                  {{ Request::segment(1) == 'link-terkait' ? ' menu-open' : '' }}
                  ">
                      <a href="#"
                          class="nav-link
                  {{ Request::segment(1) == 'sosial-media' ? ' active' : '' }}
                  {{ Request::segment(1) == 'kontak' ? ' active' : '' }}
                  {{ Request::segment(1) == 'link-terkait' ? ' active' : '' }}
                      ">
                          <i class="nav-icon fas fa-info-circle"></i>
                          <p>
                              Informasi Umum
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('sosmed') }}"
                                  class="nav-link {{ Request::segment(1) == 'sosial-media' ? 'active' : '' }}">
                                  @if (Request::segment(1) == 'sosial-media')
                                      <i class="far fa-dot-circle nav-icon ml-3"></i>
                                  @else
                                      <i class="far fa-circle nav-icon ml-3"></i>
                                  @endif
                                  <p>Sosial Media</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('kontak') }}"
                                  class="nav-link {{ Request::segment(1) == 'kontak' ? 'active' : '' }}">
                                  @if (Request::segment(1) == 'kontak')
                                      <i class="far fa-dot-circle nav-icon ml-3"></i>
                                  @else
                                      <i class="far fa-circle nav-icon ml-3"></i>
                                  @endif
                                  <p>Kontak Kami</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('link-terkait.index') }}"
                                  class="nav-link {{ Request::segment(1) == 'link-terkait' ? 'active' : '' }}">
                                  @if (Request::segment(1) == 'link-terkait')
                                      <i class="far fa-dot-circle nav-icon ml-3"></i>
                                  @else
                                      <i class="far fa-circle nav-icon ml-3"></i>
                                  @endif
                                  <p>Link Terkait</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('attachment.index') }}"
                          class="nav-link {{ Request::segment(1) == 'attachment' ? 'active' : '' }}">
                          <i class="nav-icon far fa-file"></i>
                          <p>
                              Management File
                          </p>
                      </a>
                  </li>
                  <li class="nav-item mt-3">
                      <a href="{{ route('password') }}"
                          class="nav-link {{ Request::segment(1) == 'ganti-password' ? 'active' : '' }}">
                          <i class="nav-icon fas fa-key"></i>
                          <p>
                              Ganti Password
                          </p>
                      </a>
                  </li>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
