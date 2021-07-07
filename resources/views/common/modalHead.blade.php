<!-- Modal -->
<div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-white" id="exampleModalLabel">
            <b>{{$componentName}}</b> | {{$seleted_id > 0 ? 'EDITAR' : 'CREAR'}}
        </h5>
        <h6 class="text-center text-warning" wire:loading>
            Por favor espere
        </h6>
      </div>
      <div class="modal-body">