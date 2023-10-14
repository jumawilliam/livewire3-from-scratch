<div>
    <h1>Sweet Alert</h1>
    <button wire:click="save" class="btn btn-success">Save</button>
    <button wire:click="$dispatch('delete-prompt')"  class="btn btn-danger">Delete</button>
</div>
<script>
    document.addEventListener('livewire:initialized',()=>{

        @this.on('swal',(event)=>{
            const data=event
            swal.fire({
                icon:data[0]['icon'],
                title:data[0]['title'],
                text:data[0]['text'],
            })
        })

        @this.on('delete-prompt',(event)=>{
            swal.fire({
                title:'Are you sure?',
                text:'You are about to delete this record, this action is irreversible',
                icon:'warning',
                showCancelButton:true,
                confirmButtonColor:'#3085d6',
                showCancelButtonColor:'#d33',
                confirmButtonText:'Yes, Delete it!',
            }).then((result)=>{
                if(result.isConfirmed){
                    @this.dispatch('goOn-Delete')

                    @this.on('deleted',(event)=>{
                       swal.fire({
                        title:'Deleted',
                        text:'Your record has been deleted',
                        icon:'success',
                       })
                    })
                }
            })
        })


    })
</script>
