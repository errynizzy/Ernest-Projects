package ernest.farming.instructor;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
 
 public class SplashAgro extends Activity {
    
    /**
     * The thread to process splash screen events
     */
    private Thread mSplashThread; 
   
   



    /** Called when the activity is first created. */
    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);

        // Splash screen view
        setContentView(R.layout.splashzones);
        
        final SplashAgro sPlashScreen = this;   
       
        

        // The thread to wait for splash screen events
        mSplashThread =  new Thread(){
            @Override
            public void run(){
                try {
                    synchronized(this){
                        // Wait given period of time 
                        wait(3500);
                    }
                }
                catch(InterruptedException ex){                    
                }

                finish();
                
                // Run next activity
                Intent intent = new Intent();
                intent.setClass(sPlashScreen, GoogleMapsActivity.class);
                startActivity(intent);
                //stop();                    
            }
        };
        
        mSplashThread.start();        
    }
        
   
   
        
        
       
        
    
    
        
    }    


