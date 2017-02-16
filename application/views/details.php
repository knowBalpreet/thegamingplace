<div class="row details">
  <div class="col-md-4">
    <img src="<?php echo base_url();?>assets/images/products/<?php echo $products->image;?>">
  </div>
  <div class="col-md-8">
    <h3><?php echo $products->title; ?></h3>
    <div class="details-price">
      Price: $<?php echo $products->price; ?>
    </div>
    <div class=" details-description">
      <?php echo $products->description; ?>
    </div>
    <div class="details-buy">
      <form method="post" action="<?php echo base_url();?>cart/add/<?php echo $products->id;?>">
        QTY: <input class="qty" type="text" name="qty" value="1" /><br />
        <input type="hidden" name="item_number" value="<?php echo $products->id;?>" />
        <input type="hidden" name="price" value="<?php echo $products->price;?>" />
        <input type="hidden" name="title" value="<?php echo $products->title;?>" />
        <button class="btn btn-primary" type="submit">Add To Cart</button>
      </form>
    </div>
  </div>
</div>