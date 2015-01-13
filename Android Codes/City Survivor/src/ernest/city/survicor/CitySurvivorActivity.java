package ernest.city.survicor;

import java.util.Calendar;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.view.animation.Animation;
import android.view.animation.Animation.AnimationListener;
import android.view.animation.AnimationUtils;
import android.widget.ImageView;

public class CitySurvivorActivity extends Activity {
	
	
	
 
 ImageView image1, image2, image3;
 Animation animationSlideInLeft, animationSlideOutRight;
 ImageView curSlidingImage;
 
   /** Called when the activity is first created. */
   @Override
   public void onCreate(Bundle savedInstanceState) {
       super.onCreate(savedInstanceState);
       setContentView(R.layout.main);
       image1 = (ImageView)findViewById(R.id.image1);
       image2 = (ImageView)findViewById(R.id.image2);
       //image3 = (ImageView)findViewById(R.id.image3);
       
       
      
      
       animationSlideInLeft = AnimationUtils.loadAnimation(this,
         android.R.anim.slide_in_left);
       animationSlideOutRight = AnimationUtils.loadAnimation(this,
         android.R.anim.slide_out_right);
       animationSlideInLeft.setDuration(2000);
       animationSlideOutRight.setDuration(2000);
       animationSlideInLeft.setAnimationListener(animationSlideInLeftListener);
       animationSlideOutRight.setAnimationListener(animationSlideOutRightListener);

       curSlidingImage = image1;
       image1.startAnimation(animationSlideInLeft);
       image1.setVisibility(View.VISIBLE);

   }

 @Override
 protected void onPause() {
  // TODO Auto-generated method stub
  super.onPause();
  image1.clearAnimation();
  image2.clearAnimation();
 
 }
  
 AnimationListener animationSlideInLeftListener
 = new AnimationListener(){

  @Override
  public void onAnimationEnd(Animation animation) {
   // TODO Auto-generated method stub
   
   if(curSlidingImage == image1){
    image1.startAnimation(animationSlideOutRight);
   }else if(curSlidingImage == image2){
    image2.startAnimation(animationSlideOutRight);
    Intent i = new Intent(getApplicationContext(),
    		FirstClass.class);
 	startActivity(i);
 	finish();
   }
  }

  @Override
  public void onAnimationRepeat(Animation animation) {
   // TODO Auto-generated method stub
   
  }

  @Override
  public void onAnimationStart(Animation animation) {
   // TODO Auto-generated method stub
   
  }};
   
 AnimationListener animationSlideOutRightListener
 = new AnimationListener(){
   @Override
  public void onAnimationEnd(Animation animation) {
   // TODO Auto-generated method stub
    //if(curSlidingImage == image1){
     curSlidingImage = image2;
     image2.startAnimation(animationSlideInLeft);
     image1.setVisibility(View.VISIBLE);
     
     image2.startAnimation(animationSlideInLeft);
     image1.startAnimation(animationSlideInLeft);
     image2.startAnimation(animationSlideOutRight);
     image1.startAnimation(animationSlideInLeft);
    
  }
   
  

  @Override
  public void onAnimationRepeat(Animation animation) {
   // TODO Auto-generated method stub
   
  }
  @Override
  public void onAnimationStart(Animation animation) {
   // TODO Auto-generated method stub
    
  }};
}