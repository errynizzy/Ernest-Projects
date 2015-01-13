
package ernest.m.vigour;

import java.util.ArrayList;

import org.apache.http.NameValuePair;
import org.apache.http.message.BasicNameValuePair;
import android.app.Activity;
import android.os.Bundle;

import android.content.Intent;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;


public class Complain extends Activity{
	
	EditText mvigourID; 
	EditText complain;
	
	
	Button submit;
	Button previous;
	Button exit;
	TextView showresult;
	Button home;
	
	String send;
	
	
	@Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.complain);
        
     // Importing all assets like buttons, text fields 	
        mvigourID = (EditText) findViewById(R.id.mvigourID);
        complain = (EditText) findViewById(R.id.complain);
        submit = (Button) findViewById(R.id.submit); 
        showresult  = (TextView) findViewById(R.id.showresult);
        exit = (Button) findViewById(R.id.exit); 
        previous = (Button) findViewById(R.id.previous); 
        home = (Button) findViewById(R.id.home); 
        
     
        //assigning button click events in order
		        submit.setOnClickListener(new View.OnClickListener(){
        	
            public void onClick(View v) {

                int len = mvigourID.length();
                int len1 = complain.length();
                
                if (len<=0)
                {
                	mvigourID.setError("This Field is required!");
                }
                else if (len1 <=0){
                	complain.setError("This Field is required!");
                }
               
                else {
                  	
                    ArrayList<NameValuePair> postParameters = new ArrayList<NameValuePair>();
                    postParameters.add(new BasicNameValuePair("mvigourID", mvigourID.getText().toString()));
                     postParameters.add(new BasicNameValuePair("complain", complain.getText().toString()));
                     
                try {
        			send = CustomHttpClient.executeHttpPost("http://10.0.2.2/mvigour/complain.php",postParameters);
        			
        			
        		} catch (Exception e) {
        			showresult.setText("Error in Internet Connection. Your complain is not sent. Please check your Internet settings and Try again!");
        			e.printStackTrace();
        		}  
                Intent i = new Intent(getApplicationContext(),
        				SuccessActivity.class);
        		startActivity(i);
        		finish();
                }
	 } 
                 
});
       
        
		        home.setOnClickListener(new View.OnClickListener() {
        	public void onClick(View view1) {
				Intent i = new Intent(getApplicationContext(),
						MainActivity.class);
				startActivity(i);
				finish();
			} 
		}); 
		        
		        previous.setOnClickListener(new View.OnClickListener() {
		        	public void onClick(View view1) {
						Intent i = new Intent(getApplicationContext(),
								InsuranceMenu.class);
						startActivity(i);
						finish();
					} 
				}); 
		        
		        exit.setOnClickListener(new View.OnClickListener() {
		        	public void onClick(View view) {
		        		 finish();
		                 System.exit(0);
					} 
				}); 
       
        
        
        
    }

	
        
      
}
