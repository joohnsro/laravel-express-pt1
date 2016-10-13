@extends('template.default')

@section('title')
    Blog do Jonathan
@stop

@section('content')
    <h2 class="loop-title">Olá mundo!</h2>
    <h4 class="loop-subtitle">Este é um novo subtítulo</h4>
    <div class="loop-date">12 de Outubro de 2016</div>
    <div class="loop-content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer suscipit vitae nibh in viverra. Quisque id lorem a erat feugiat pulvinar blandit nec mauris. Nunc accumsan justo ac enim consequat, sit amet pretium metus vehicula. Vivamus faucibus ac orci vel egestas. Morbi eget metus scelerisque, dignissim dolor quis, interdum eros. Maecenas non purus urna. Praesent fringilla arcu maximus dolor placerat, a laoreet ex consequat. Interdum et malesuada fames ac ante ipsum primis in faucibus. In hac habitasse platea dictumst. In enim odio, iaculis et orci ac, sodales auctor lorem.</p>
        <blockquote>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
        </blockquote>
        <p>Ut rutrum elit a turpis tempor consequat. Aenean consequat purus vel risus cursus malesuada. Quisque imperdiet condimentum lectus, a egestas lacus laoreet a. Nullam a dignissim urna. Nunc lobortis mauris id dui malesuada faucibus feugiat eu ipsum. Donec at consectetur turpis, vitae dapibus justo. Aliquam pulvinar et tortor nec pretium.</p>
    </div>
@stop

@section('sidebar')
    <h3>Categoria</h3>
    <hr>
    <ul>
        <li>Categoria 1</li>
        <li>Categoria 2</li>
        <li>Categoria 3</li>
        <li>Categoria 4</li>
    </ul>
@stop