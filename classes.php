<? php 
	class Books{
		public var $title;
		public var $price;
		var $pages;

		public function setTitle($name)
		{
			$this->title = $name;
		}

		public function setPrice($money){
			$this->price = $money;
		}

		public function getTitle()
		{
			return $this->title;
		}
	}

	
?>