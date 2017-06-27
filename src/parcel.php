<?php
    class Parcel
    {
        private $weight;
        private $height;
        private $length;
        private $width;

        function __construct($weight, $height, $length, $width)
        {
            $this->weight = $weight;
            $this->height = $height;
            $this->length = $length;
            $this->width = $width;
        }

        function setWeight($new_weight)
        {
            $this->weight = $new_weight;
        }

        function getWeight()
        {
            return $this->weight;
        }

        function setHeight($new_height)
        {
            $this->height = $new_height;
        }

        function getHeight()
        {
            return $this->height;
        }

        function setLength($new_length)
        {
            $this->length = $new_length;
        }

        function getLength()
        {
            return $this->length;
        }

        function setWidth($new_width)
        {
            $this->width = $new_width;
        }

        function getWidth()
        {
            return $this->width;
        }
    }


?>
