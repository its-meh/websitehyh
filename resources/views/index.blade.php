<!-- Stored in resources/views/child.blade.php -->
@extends('app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
<?php   $valida=array();  ?>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center" style="background: url('assets/banner_background/{{$banner->foto}}') center center">
    <div class="container" data-aos="fade-in">
      <h1>{{$banner->titulo}}</h1>
      <h2>{{$banner->descripcion}}</h2>
      <div class="d-flex align-items-center">
        <i class="bx bxs-right-arrow-alt get-started-icon"></i>
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
      </div>
    </div>
  </section>
  <!-- End Hero -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-5" data-aos="fade-up">
            <div class="content">
              <h3>Porque elegir servicios H&H</h3>
              <p>
Empresa de Servicios H Y H Ltda., nace de la necesidad de poder brindar el mejor servicio ya sea de mantención o reparación a una amplia gama de equipos tecnológicos de la más alta calidad y avanzada tecnología. Contamos con personal de amplia trayectoria y experiencia de más de 20 años, lo cual respalda nuestros servicios.
              </p>
              <div class="text-center">
                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-xl-8 col-lg-7 d-flex">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-broadcast"></i>
                    <h4>SERVICIO TECNICO DEDICADO</h4>
                    <p>Nuestros especialistas están disponibles
para aclarar atender y cualquier duda</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>ARRIENDO DE EQUIPOS</h4>
                    <p>Contamos con arriendo de equipos
para las áreas de Laboratorio y Oftalmología.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>En todo Chile!</h4>
                    <p>Contamos con convertura a lo largo del País</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Why Us Section -->


    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">
        <div class="section-title">
          <h2 data-aos="fade-up">{{$seccionArriendo->titulo}}</h2>
          <p data-aos="fade-up">{{$seccionArriendo->descripcion}}</p>
          <div class="d-flex align-items-center">
        <i class="bx bxs-right-arrow-alt get-started-icon"></i>
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
      </div>
        </div>
            <!-- START DYNAMIC BLOCK  -->
          <?php $contador=0; ?>
            @foreach($equipos as $key => $value)
        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
          <?php
       //   echo "<br>";
        // print_r($value->id_depto); die;
          if(!array_key_exists($value->id_depto,$valida) ){  
            ?>
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="<?= $contador == 1 ? 'collapse' : 'collapse collapsed'?>" href="#{{$value->descripcion}}">{{$value->descripcion}} <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="{{$value->descripcion}}" class="collapse <?= $contador == 1 ? 'show' : ''?>" data-parent=".faq-list">
              <div class="row col-md-12">
                @foreach($value->equipo as $kequipo => $equipo)
                  <?php 
                  if($kequipo%5 == 0 && $value->id_depto == 1 || $value->id_depto ==2)
                  {
                    echo '<div class="col-md-4"><p>»'.$equipo->descripcion.'</p></div>';
                  }else{
                    switch($value->id_depto):
                      case 3:
                          echo '<div class="col-md-offset-2 col-md-8"><p>»'.$equipo->descripcion.'<a target="_blank" href="https://www.teamviewer.com/es/">»»Descarga Teamviwer Aqui</a></p></div>';
                        break;
                        case 4:
                          echo '<div class="col-md-offset-2 col-md-8"><p>»'.$equipo->descripcion.'<a href="#contactanos">»»Contactanos aqui</a></p></div>';
                        break;
                        default:
                        echo '<div class="col-md-offset-2 col-md-4"><p>»'.$equipo->descripcion.'</p></div>';
                      break;
                    endswitch;
                  }
                  ?>
                @endforeach 
                </div>
              </div>
            <?php 
          }
             ?>
            </li>
          </ul>
        </div>
        <?php $valida[$value->id_depto]=''; $contador++;?>
        @endforeach
            <!-- END DYNAMIC BLOCK  -->
      </div>
    </section>
    <!-- End F.A.Q Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">
        <div class="section-title">
          <h2 data-aos="fade-up">Portfolio</h2>
          <p data-aos="fade-up">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <?php 
              foreach ($depto as $key => $value) { ?>

                <li data-filter=".<?=$value->id_depto?>"><?=$value->descripcion?></li>
              
              <?php } ?>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <?php foreach ($gallery as $key => $value) { ?>
              <div class="col-lg-4 col-md-6 portfolio-item <?=$value->departamento_id?>" style="max-width: 200px;">
                <img src="assets/gallery/<?=$value->departamento_id.'/'.$value->foto?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><?=$value->descripcion?></h4>
                  <p><?=$value->descripcion?></p>
                  <a href="assets/gallery/<?=$value->departamento_id.'/'.$value->foto?>" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="assets/gallery/<?=$value->departamento_id.'/'.$value->foto?>" class="details-link" title="Mas info"><i class="bx bx-link"></i></a>
                </div>
              </div>
      <?php } ?>
        </div>

      </div>
    </section>
    <!-- End Portfolio Section -->

@endsection