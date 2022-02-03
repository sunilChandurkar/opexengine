<?php
Class Universe {
    protected $galaxies = ['milkyWay', 'andromeda', 'VIRGO', 'Milkyway'];
    protected $stars = ['polaris', 'sirius'];
}

Class Galaxy extends Universe {
    public function get_all(bool $formatted = FALSE): array
    {
        // This method should return raw or formatted unique $galaxies
        if($formatted === false){
            return $this->galaxies;
        }else{
            $result = array();
            foreach($this->galaxies as $galaxy){
                $galaxy = $this->format_name($galaxy);
                $result[] = $galaxy;
            }
            $result = array_unique($result);
            return $result;
        }
    }

    protected function format_name(string $name): string
    {
        // This method should return properly capitalized name.
        // For example, CucumBER would be retuned as Cucumber
        $name = strtolower($name);
        $name = ucfirst($name);
        return $name;
    }
}

Class Stars extends Galaxy {
    //Getters should be public.
    public function get_stars(): array
    {
        // This method should return raw $stars
        return $this->stars;
    }

    public function add_stars(array &$stars): void
    {
        // This method does not return anything; however, it should
        // append some values to $stars and ensure there are no duplicates and
        // that $stars are properly capitalized

        foreach ($stars as $star){
            $this->stars[] = $star;
        }

        $this->stars = array_unique($this->stars);

        $formatted_stars = array();

        foreach($this->stars as $star){
            $star = $this->format_name($star);
            $formatted_stars[] = $star;
        }
        $this->stars = $formatted_stars;
    }
}

/**
 * Instructions:
 * Please fill in the methods above with your code as you see fit. We will then
 * run the lines of code below and expect to get the output below.
 */

$galaxy = new Galaxy;
print_r ($galaxy->get_all());
print_r ($galaxy->get_all(TRUE));

$my_stars = ['rigel', 'canopus'];
$stars = new Stars;
$stars->add_stars($my_stars);
print_r($stars->get_stars());

/*
Expected output:

Array
(
[0] => milkyWay
[1] => andromeda
[2] => VIRGO
[3] => Milkyway
)
Array
(
[0] => Milkyway
[1] => Andromeda
[2] => Virgo
)
Array
(
[0] => Polaris
[1] => Sirius
[2] => Rigel
[3] => Canopus
)
*/
?>