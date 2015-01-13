package connekt.ernest;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;


import org.apache.http.HttpResponse;
import org.apache.http.client.ClientProtocolException;
import org.apache.http.client.HttpClient;
import org.apache.http.client.methods.HttpPost;
import org.apache.http.impl.client.DefaultHttpClient;
import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import android.app.Activity;
import android.app.AlertDialog;
import android.content.DialogInterface;
import android.content.Intent;
import android.os.AsyncTask;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.AdapterView;
import android.widget.AdapterView.OnItemClickListener;
import android.widget.EditText;
import android.widget.ImageButton;
import android.widget.ListView;
import android.widget.SimpleAdapter;
import android.widget.TextView;
import android.widget.Toast;
 
public class ListForms extends Activity {
 private String jsonResult, number; 
 
 //just to try
 String url, p_number, srch, srchi, name;
 EditText search;
 TextView tv;
 ImageButton imageButtonSearch;
 
 private ListView listView;
 public String next = "";
 
 
 
 @Override
	public void onBackPressed() {
	    AlertDialog.Builder builder = new AlertDialog.Builder(this);
	    builder.setMessage("Are you sure you want to go back?")
	           .setCancelable(false)
	           .setPositiveButton("Yes", new DialogInterface.OnClickListener() {
	               public void onClick(DialogInterface dialog, int id) {
	            	  Intent i = new Intent(getApplicationContext(),
								MainActivity.class);
						startActivity(i);
						finish();
	               }
	           })
	           .setNegativeButton("No", new DialogInterface.OnClickListener() {
        public void onClick(DialogInterface dialog, int id) {
             dialog.cancel();
        }
    });
	    AlertDialog alert = builder.create();
	    alert.show();

	}

 
 
	
 
 @Override
 protected void onCreate(Bundle savedInstanceState) {
  super.onCreate(savedInstanceState);
  setContentView(R.layout.main_listforms);
  
  imageButtonSearch = (ImageButton) findViewById(R.id.imageButtonSearch);
  search = (EditText) findViewById(R.id.search);
  tv = (TextView) findViewById(R.id.tv );
  
  search.setVisibility(View.GONE);
  imageButtonSearch.setVisibility(View.GONE);
  srch = search.getText().toString();
  
  number = getIntent().getStringExtra("number");
  p_number = getIntent().getStringExtra("p_number");
  name = getIntent().getStringExtra("name");
  srchi =  getIntent().getStringExtra("srchi");
  
  tv.setText(name + " Simcards batches list:");
  
 
	
     	  url = "http://connektafrica.net/pos_app/sim.php?number=" + number;
       

  imageButtonSearch.setOnClickListener(new View.OnClickListener() {
   	public void onClick(View view) {
   		Intent intent = new Intent(getApplicationContext(),
   				ListForms.class);
   		intent.putExtra("srchi", srch);
    	intent.putExtra("number", number);
    	intent.putExtra("p_number", p_number);
    	startActivity(intent);
		finish();
			startActivity(intent);
			finish();
		} 
	});
  
  
  
 

  listView = (ListView) findViewById(R.id.listView1);
  accessWebService();
  
 }
 
 

 
 
 
 // Task to access the web
 private class JsonReadTask extends AsyncTask<String, Void, String> {
  @Override
  protected String doInBackground(String... params) {
   HttpClient httpclient = new DefaultHttpClient();
   HttpPost httppost = new HttpPost(params[0]);
   
   try {
    HttpResponse response = httpclient.execute(httppost);
    jsonResult = inputStreamToString(
      response.getEntity().getContent()).toString();
   }
 
   catch (ClientProtocolException e) {
    e.printStackTrace();
   } catch (IOException e) {
    e.printStackTrace();
   }
   return null;
  }
 
  private StringBuilder inputStreamToString(InputStream is) {
   String rLine = "";
   StringBuilder answer = new StringBuilder();
   BufferedReader rd = new BufferedReader(new InputStreamReader(is));
 
   try {
    while ((rLine = rd.readLine()) != null) {
     answer.append(rLine);
    }
   }
 
   catch (IOException e) {
    // e.printStackTrace();
    Toast.makeText(getApplicationContext(),
    		name + ", there is a problem in Internet connection. Please try again!" , Toast.LENGTH_LONG).show();
   }
   return answer;
  }
 
  @Override
  protected void onPostExecute(String result) {
   ListDrwaer();
  }
 }// end async task
 
 public void accessWebService() {
  JsonReadTask task = new JsonReadTask();
  // passes values for the urls string array
  task.execute(new String[] { url });
 }
 
 // build hash set for list view
 public void ListDrwaer() {
  List<Map<String, String>> employeeList = new ArrayList<Map<String, String>>();
 
  try {
	  if(jsonResult == null){
		  tv.setText(name + " you dont have internet connection. Please try again!");
		  Toast.makeText(getApplicationContext(), name + " There is a problem in Internet connection. Please try again!",
				     Toast.LENGTH_SHORT).show();
	  }
	  else{
		  JSONObject jsonResponse = new JSONObject(jsonResult);
		   JSONArray jsonMainNode = jsonResponse.optJSONArray("simcards");
		 
		   for (int i = 0; i < jsonMainNode.length(); i++) {
		    JSONObject jsonChildNode = jsonMainNode.getJSONObject(i);
		    String name = jsonChildNode.optString("batch_size");
		    String number = jsonChildNode.optString("batch_number");
		    String outPut = "Batch Size " + name + " --> " + number;
		    employeeList.add(createEmployee("list",  outPut));
	  }
   
   // next = name.toString();
   }
  } catch (JSONException e) {
   Toast.makeText(getApplicationContext(), name + ", there is a problem in Internet connection. Please try again!",
     Toast.LENGTH_SHORT).show();
  }
 
  SimpleAdapter simpleAdapter = new SimpleAdapter(this, employeeList,
    android.R.layout.simple_list_item_1,
    new String[] { "list" }, new int[] { android.R.id.text1 });
  listView.setAdapter(simpleAdapter);
  
  listView.setOnItemClickListener(new OnItemClickListener() {

	  @Override
	  public void onItemClick(AdapterView<?> parent, View v,
	  final int position, long id) {
		  next = listView.getItemAtPosition(position).toString();
		  Intent intent = new Intent(ListForms.this, Main_Screen_sim.class);
	    	intent.putExtra("go", next);
	    	intent.putExtra("p_number", p_number);
	    	intent.putExtra("name", name);
        startActivity(intent);
        finish();
		  
	  /*Log.i("List View Clicked", "**********");
	  Toast.makeText(ListViewActivity.this,
	  "List View Clicked:" + position, Toast.LENGTH_LONG)
	  .show();
	  */
	  }
	  });

 }
 
 private HashMap<String, String> createEmployee(String name, String number) {
  HashMap<String, String> employeeNameNo = new HashMap<String, String>();
  employeeNameNo.put(name, number);
  return employeeNameNo;
 }
}