
    <?php
    /**
     *
     */
    class ClassNBA
    {
      //Definicion de variables
      public $Equipo="Cliveland Cavaliers";
      public $Estadio="Quicken Loans Arena";
      public $Propietario="Dan Gilbert";
      public $Localizacion="Cliveland, Ohio";

      //Equipo
      public function setEquipo($NuevoEquipo){
      $this->Equipo=$NuevoEquipo;
      }
      public function getEquipo(){
      return $this->Equipo;
      }

      //Estadio
      public function setEstadio($NuevoEstadio){
      $this->Estadio=$NuevoEstadio;
      }
      public function getEstadio(){
      return $this->Estadio;
      }

      //Propietario
      Public function setPropietario($NuevoPropietario){
      $this->Propietario=$NuevoPropietario;
      }
      Public function getPropietario(){
      return $this->Propietario;
      }

      //Localización
      Public function setLocalizacion($NuevoLocalizacion){
      $this->Localizacion=$NuevoLocalizacion;
      }
      Public function getLocalizacion(){
      return $this->Localizacion;
      }
    }



    ?>
