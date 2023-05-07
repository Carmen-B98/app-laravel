@extends('layouts.page')

@section('content')
    <div class="slider">
      <div class="section_slider">
        @foreach($sliders as $slider)
        <div class="single-item">
          <img src="{{ asset('/storage/icons/logo.png') }}" alt="Logo" class="logo"/>
          <div class="slider-item">
            <img src="{{ asset('/storage/' . $slider->image) }}" alt="Slider imagine"/>
            <div>
              {!!$slider->body!!}
              <p class="slider-subtitle">{{$slider->excerpt}}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    <div class="section_benefits">
      <a href="#newsletter" class="sticky">
        <img src="{{ asset('/storage/icons/concurs-sticky.png') }}" alt="Concurs sticky"/>
      </a>
      <div class="header">
        <p>De ce să alegi FatOff!?</p>
      </div>
      @foreach($benefits as $benefit)
        <div class="benefit-item">
          <div class="benefit-icon">
            <img src="{{ asset('/storage/' . $benefit->image) }}" alt="Benefit imagine"/>
          </div>
          <div class="benefit-description">
            <p>{{$benefit->title}}</p>
          </div>
        </div>
      @endforeach
    </div>
    <div class="section_products">
      <div class="header">
        <p>DY Nutrition</p>
        <p>Batoane Proteice</p>
      </div>
      <div class="grid-products">
        @foreach($products as $product)
          <div class="product-item">
            <div class="product-image">
              <img src="{{ asset('/storage/' . $product->image) }}" alt="Product imagine"/>
            </div>
            <div class="product-description">
              <p>{{$product->excerpt}}</p>
            </div>
            <div class="product-title">
              <p>{{$product->title}}</p>
            </div>
            <div class="show-product">
              <a target="_blank">
                Vezi Produsul
              </a>
            </div>
          </div>
        @endforeach
      </div>
    </div>
    <div class="section_bonuses">
      <div class="header">
        <p>câștigă cu fatoff!</p>
      </div>
      <div class="grid-bonuses">
        @foreach($bonuses as $bonus)
          <div class="bonus-item">
            <div class="elem">
              <div class="bonus-number">
                <p>{{$bonus->excerpt}}</p>
              </div>
              <div class="bonus-title">
                <p>{{$bonus->title}}</p>
              </div>
              @if(!empty($bonus->body))
                <div class="bonus-content">
                  {!! $bonus->body !!}
                </div>
              @endif
            </div>
          </div>
        @endforeach
      </div>
    </div>
    <div class="section_newsletter" id="newsletter">
      <div class="container mt-4">
        <div class="header">
          <h2>Înscrie-te la Newsletter</h2>
          <p>Înscrie-te la newsletter și participă la concurs.</p>
        </div>
        <form action="{{route('send.email')}}" method="POST">
          @csrf
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" name="nume" class="form-control" placeholder="Nume">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" name="phone" class="form-control" pattern="[0-9]{10}" placeholder="Telefon">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="submit" value="Trimite" class="btn btn-primary">
              </div>
            </div>
          </div>
        </form>
        <p class="terms">Prin completarea formularului acceptați și sunteți de acord cu GDPR și termeni și condiții.</p>
      </div>
    </div>






@endsection
