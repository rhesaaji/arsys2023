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
                    <th>Nama Dosen</th>
                    <th>aggregate</th>
                    <th>action</th>
                  </tr>
              </thead>
               <tbody>
                <tr>
                    <td>Nama Dosen</td>
                    <td>Total mahasiswa yang sudah direview</td>
                    <td><button type="button" class="btn btn-tool" > <i class="fas fa-user-plus"></i></button>
                   </td>
                  </tr>
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
    