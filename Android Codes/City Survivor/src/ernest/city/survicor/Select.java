package ernest.city.survicor;


import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.view.View.OnClickListener;
import android.widget.ImageButton;

public class Select extends Activity implements OnClickListener{
	
	ImageButton imageButtonApp;
	ImageButton imageButtonGame;
	ImageButton imageButtonExit;
	ImageButton imageButtonBack;
	ImageButton imageButtonInfo;
	
	@Override
  	public void onBackPressed() {
	 Intent i = new Intent(getApplicationContext(),
				FirstClass.class);
		startActivity(i);
		finish();
	 }

	@Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.select);
        
        imageButtonApp = (ImageButton) findViewById(R.id.imageButtonApp);
        imageButtonGame = (ImageButton) findViewById(R.id.imageButtonGame);
        imageButtonExit = (ImageButton) findViewById(R.id.imageButtonExit);
        imageButtonBack = (ImageButton) findViewById(R.id.imageButtonBack);
        imageButtonInfo = (ImageButton) findViewById(R.id.imageButtonInfo);
        
        
        imageButtonApp.setOnClickListener(new View.OnClickListener() {
           	public void onClick(View view) {
           		Intent i = new Intent(getApplicationContext(),
    						MenuApp.class);
    				startActivity(i);
    				finish();
    			} 
    		});
           
      
           imageButtonGame.setOnClickListener(new View.OnClickListener() {
              	public void onClick(View view) {
              		Intent i = new Intent(getApplicationContext(),
       						MenuGame.class);
       				startActivity(i);
       				finish();
       			} 
       		});
        
           
           imageButtonBack.setOnClickListener(new View.OnClickListener() {
            	public void onClick(View view) {
            		Intent i = new Intent(getApplicationContext(),
     						FirstClass.class);
     				startActivity(i);
     				finish();
     			} 
     		});
           
           
           imageButtonExit.setOnClickListener(new View.OnClickListener() {
               public void onClick(View view) {
               		 finish();
                        System.exit(0);
       			} 
       		}); 
       
        
	}

	@Override
	public void onClick(View arg0) {
		// TODO Auto-generated method stub
		
	}
	
	
	

}

