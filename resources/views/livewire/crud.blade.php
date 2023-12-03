<div class="container">
     <h1 >@if($edit) Update Student Details @else Enter Student Details @endif</h1>
     @if(session('message'))
          <p>{{session('message')}}</p>
     @endif
     <div class="section-form">
          <form action="" @if($edit) wire:submit.prevent="updateStudent" @else wire:click.prevent="create" @endif>
               First name: 
               <input wire:model.defer="firstname" type="text" name="firstname" id=""><br><br>
               @error('firstname')
                    <p>{{$message}}</p>
               @enderror
               Last name:
               <input wire:model.defer="lastname" type="text" name="lastname" id=""><br><br>
               @error('lastname')
                    <p>{{$message}}</p>
               @enderror
               Course:
               <input wire:model.defer="course" type="text" name="course" id=""><br><br>
               @error('course')
                    <p>{{$message}}</p>
               @enderror
               <button type="submit" @if($edit) Update @else Save @endif>Submit</button>
          </form>
     </div>

     <div class="search-table">
          <input wire:model.live.="search" type="search" name="" id="" placeholder="Search">
     </div>

     <div class="section-table">
          @foreach($students as $student)
          <table>
               
               <tr>
                    <th>Firtsname</th>
                    <th>Lastname</th>
                    <th>Course</th>
                    <th>Action</th>
               </tr>
              
               
               
               <tr>
                    
                    <td>{{$student->firstname}}</td>
                    <td>{{$student->lastname}}</td>
                    <td>{{$student->course}}</td>
                    
                    <td>
                         <button wire:click="studentEdit({{$student->id}})">Edit</button>
                         <button wire:click="studentDelete({{$student->id}})">Delete</button>
                    </td>
                    
               </tr>
                   
          </table>
          
             @endforeach
          
               
     
          
             
     </div>
     {{$students->links()}} 
</div>
