@if(session()->has('flash'))
<div class="container mt-4">
  <div id="flashMessage" class="alert alert-success alert-dismissible fade show" role="alert">
    <button type="button" class="btn btn-danger close-flash btn-sm" aria-label="Fechar">
      <span aria-hidden="true">&times;</span>
    </button>
    <strong>{{ session('flash') }}</strong> 
  </div>
</div>
@endif

<script>
  // Adicionando evento de clique ao botão de fechar
  document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('.close-flash').addEventListener('click', function() {
      document.querySelector('#flashMessage').classList.add('fade');
    
      setTimeout(function() {
        document.querySelector('#flashMessage').style.display = 'none';
      }, 500); 
    });

  });
</script>
