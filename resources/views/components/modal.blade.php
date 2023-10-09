
  <!-- Modal -->
  @props(['modalTitle','eventName'])
  <div class="modal fade" id="{{$eventName}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">{{$modalTitle}}</h1>
          <button @click="$dispatch('{{$eventName}}-close')" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          {{$slot}}
        </div>
        <div class="modal-footer">
          <button @click="$dispatch('{{$eventName}}-close')" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button @click="$dispatch('{{$eventName}}')" type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>