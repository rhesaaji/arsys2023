
<div>
  <div>
    <div><b>Kode Jurusan.NIM</b> | Nama Mahasiswa</div>
    <div><b>Research Code</b> | Event Type</div>
    <div style="font-style:italic">Judul Penelitian</div>
  </div>
  <br>
  <div>
    @livewire('kbk.edit.view')
  </div>
  <br>
  <div>
    <div class="input-group input-group-sm" style="width:45%">
      <input class="form-control form-control-navbar" type="search" placeholder="Search reviewer name" >
      <div class="input-group-append">
      <button class="btn btn-navbar" type="submit">
          <i class="fas fa-search"></i>
      </button>
      </div>
      <br>
      <br>
  </div>
    <div>
        <button data-dismiss="modal"style="background-color: #18df11;color:#ffffff"  >
            <i class="fas fa-user-plus"></i>Assign All Member
        </button>
    </div>
    <br>
    <div class="row">
        <div class="col-md-11">
            <table id="customers">
              <thead>
                <tr> 
                    <th>code</th>
                    <th>Nama Dosen</th>
                    <th>aggregate</th>
                    <th>action</th>
                  </tr>
              </thead>
               <tbody>
                @foreach($dosen as $index=>$item)
                <tr>
                   <td class="text-blue"> <b>{{$item->code}}</b></td> 
                    <td>{{$item->first_name}} {{$item->last_name}}</td>
                    <td>Total mahasiswa yang sudah direview</td>
                    <td><button type="button" class="btn btn-tool" > <i class="fas fa-user-plus"></i></button>
                   </td>
                  </tr>
                  @endforeach
               </tbody>
                
                
              </table>
              
              
              
              
              
        </div>
    </div>
  </div>
</div>
<style>
    #customers {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    
    #customers td, #customers th {
      border: 1px solid #ddd;
      padding: 8px;
    }
    
    #customers tr:nth-child(even){background-color: #f2f2f2;}
    
    #customers tr:hover {background-color: #ddd;}
    
    #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #04AA6D;
      color: white;
    }
    </style>
    