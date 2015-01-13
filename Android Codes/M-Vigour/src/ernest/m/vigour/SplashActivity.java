package ernest.m.vigour;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.os.Handler;
import android.os.Message;
import android.util.Log;
import android.app.ProgressDialog;
import android.app.Dialog;


import android.widget.Toast;
 
 public class SplashActivity extends Activity {
    
    /**
     * The thread to process splash screen events
     */
    private Thread mSplashThread; 
    ProgressThread progThread;
    ProgressDialog progDialog;
    int typeBar;                     // Determines type progress bar: 0 = spinner, 1 = horizontal
    int delay = 100;                  // Milliseconds of delay in the update loop
    int maxBarValue = 100;           // Maximum value of horizontal progress bar



    /** Called when the activity is first created. */
    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);

        // Splash screen view
        setContentView(R.layout.splash);
        
        final SplashActivity sPlashScreen = this;   
       
        typeBar = 1;
        showDialog(typeBar);
        Toast.makeText(this, "Loading M-Vigour!", Toast.LENGTH_LONG).show(); 

        // The thread to wait for splash screen events
        mSplashThread =  new Thread(){
            @Override
            public void run(){
                try {
                    synchronized(this){
                        // Wait given period of time 
                        wait(13000);
                    }
                }
                catch(InterruptedException ex){                    
                }

                finish();
                
                // Run next activity
                Intent intent = new Intent();
                intent.setClass(sPlashScreen, MainActivity.class);
                startActivity(intent);
                //stop();                    
            }
        };
        
        mSplashThread.start();        
    }
        
    /**
     * Processes splash screen touch events
     */
   
   
        
        
        // Method to create a progress bar dialog of either spinner or horizontal type
        @Override
        protected Dialog onCreateDialog(int id) {
            switch(id) {
            case 0:                      // Spinner
                progDialog = new ProgressDialog(this);
                progDialog.setProgressStyle(ProgressDialog.STYLE_SPINNER);
                progDialog.setMessage("Loading...");
                progThread = new ProgressThread(handler);
                progThread.start();
                return progDialog;
            case 1:                      // Horizontal
                progDialog = new ProgressDialog(this);
                progDialog.setProgressStyle(ProgressDialog.STYLE_HORIZONTAL);
                progDialog.setMax(maxBarValue);
                progDialog.setMessage("M-Vigour Loading...");
                progThread = new ProgressThread(handler);
                progThread.start();
                return progDialog;
            default:
                return null;
            }
        }

        
     // Handler on the main (UI) thread that will receive messages from the 
        // second thread and update the progress.
        
        final Handler handler = new Handler() {
            public void handleMessage(Message msg) {
                // Get the current value of the variable total from the message data
                // and update the progress bar.
                int total = msg.getData().getInt("total");
                progDialog.setProgress(total);
                if (100 <= total){
                    dismissDialog(typeBar);
                    progThread.setState(ProgressThread.DONE);
                }
            }
        };
    
        // Inner class that performs progress calculations on a second thread.  Implement
        // the thread by subclassing Thread and overriding its run() method.  Also provide
        // a setState(state) method to stop the thread gracefully.
        
        private class ProgressThread extends Thread {	
            
            // Class constants defining state of the thread
            final static int DONE = 0;
            final static int RUNNING = 1;
            
            Handler mHandler;
            int mState;
            int total;
        
            // Constructor with an argument that specifies Handler on main thread
            // to which messages will be sent by this thread.
            
            ProgressThread(Handler h) {
                mHandler = h;
            }
            
            // Override the run() method that will be invoked automatically when 
            // the Thread starts.  Do the work required to update the progress bar on this
            // thread but send a message to the Handler on the main UI thread to actually
            // change the visual representation of the progress. In this example we count
            // the index total down to zero, so the horizontal progress bar will start full and
            // count down.
            
            @Override
            public void run() {
                mState = RUNNING;   
                total = 0;
                while (mState == RUNNING) {
                    // The method Thread.sleep throws an InterruptedException if Thread.interrupt() 
                    // were to be issued while thread is sleeping; the exception must be caught.
                    try {
                        // Control speed of update (but precision of delay not guaranteed)
                        Thread.sleep(delay);
                    } catch (InterruptedException e) {
                        Log.e("ERROR", "Thread was Interrupted");
                    }
                    
                    // Send message (with current value of  total as data) to Handler on UI thread
                    // so that it can update the progress bar.
                    
                    Message msg = mHandler.obtainMessage();
                    Bundle b = new Bundle();
                    b.putInt("total", total);
                    msg.setData(b);
                    mHandler.sendMessage(msg);
                    
                    total++;    // Count up
                }
            }
            
            // Set current state of thread (use state=ProgressThread.DONE to stop thread)
            public void setState(int state) {
                mState = state;
            }

        
        
        
        //the end
        
    }    
} 