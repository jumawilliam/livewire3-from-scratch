<div x-data="dragDrop()">
    <h1>Drag Drop File uploader</h1>
    <div class="card" x-on:dragover.prevent="dragover" x-on:dragleave,prevent="dragleave" x-on:drop.prevent="drop($event)">
        <div class="card-body">
            <div style="text-align: center">
                <h4>Drop file here to upload</h4>
                <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="currentColor" class="bi bi-cloud-upload-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 0a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 4.095 0 5.555 0 7.318 0 9.366 1.708 11 3.781 11H7.5V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11h4.188C14.502 11 16 9.57 16 7.773c0-1.636-1.242-2.969-2.834-3.194C12.923 1.999 10.69 0 8 0m-.5 14.5V11h1v3.5a.5.5 0 0 1-1 0"/>
                  </svg>
            </div>
            <input  @change="uploadSelected" type="file" class="form-control" multiple>
            @error('files.*')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
    <div class="progress">
        <div class="progress-bar" role="progress-bar" :style="{width:uploadProgress+'%'}" aria-valuemin="0" aria-valuemax="100" x-text="uploadProgress+'%'"></div>
    </div>
    @foreach($files as $file)
    <ul class="list-group ">

        <li wire:key="({{$loop->index}})" class="list-group-item d-flex justify-content-between align-items-start">
          <div class="ms-2 me-auto">
            <div class="fw-bold">{{$file->getClientOriginalName()}}</div>
          </div>
          <svg wire:click="remove({{$loop->index}})" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
            <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
          </svg>
        </li>
    </ul>
    @endforeach
    @if(!empty($files))
    <button wire:click="uploadFiles" class="btn btn-success">Upload Files</button>
    @endif
</div>
<script>
    function dragDrop(){
        return{
            uploadProgress:0,
            dragover(){
                //alert('123')
            },
            dragleave(){
                //alert('456')
            },
            uploadSelected(e){
                if(event.target.files.length>0){
                    const files=event.target.files
                    this.uploadFiles(files)
                }
            },
            drop(e){
                if(event.dataTransfer.files.length>0){
                    const files=e.dataTransfer.files
                    this.uploadFiles(files)
                }
            },
            uploadFiles(files){
                @this.uploadMultiple('files',files,
                (success)=>{

                },
                (error)=>{

                },
                (event)=>{
                    this.uploadProgress=event.detail.progress
                }
                )
            }
        }
    }
</script>

