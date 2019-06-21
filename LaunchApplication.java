package ChromeBrowser;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.chrome.ChromeDriver;


import java.util.Random;
import java.util.Scanner;


public class LaunchApplication {
	
	public static void main(String[] args) throws InterruptedException
	{
		Scanner user_input = new Scanner(System.in);  
		System.setProperty("webdriver.chrome.driver", "C:\\Users\\Teh\\Desktop\\chromedriver_win32\\chromedriver.exe"); //must include 
		String TestWeb_Address = "http://localhost/Homework-Second";  //my website
		
		System.out.println("1:Test Login");
		System.out.println("2:Test Register");
		System.out.println("3:Exit");
	
		int choice = user_input.nextInt();
		switch(choice)
		{
		case 1:
			login(TestWeb_Address);
			break;
		case 2:
			register(TestWeb_Address);
			break;
		default:
			System.exit(0);
		}
	}
	
	//generate random email
	private static String getSaltString() {
        String SALTCHARS = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
        StringBuilder salt = new StringBuilder();
        Random rnd = new Random();
        while (salt.length() < 10) { // length of the random string.
            int index = (int) (rnd.nextFloat() * SALTCHARS.length());
            salt.append(SALTCHARS.charAt(index));
        }
        String saltStr = salt.toString();
        return saltStr;
       
    }
	
	
	//generate random username
	private static String getUserName() {
		String UserName;
		Random rn = new Random();
		int result = rn.nextInt(10) + 1;
		
		switch(result){
		case 1:
			UserName = "Jack";
			break;
		case 2:
			UserName = "Mike";
			break;
		case 3:
			UserName = "Alice";
			break;
		case 4:
			UserName = "Sharon";
			break;
		case 5:
			UserName = "Lily";
			break;
		case 6:
			UserName = "Ron";
			break;
		case 7:
			UserName = "Harry";
			break;
		case 8:
			UserName = "Herminy";
			break;
		case 9:
			UserName = "Shiny";
			break;
		case 10:
			UserName = "Taurus";
			break;
		default:
			UserName = "Yuri";
	
		}
		return UserName;
	}
	
	
	
	
	
	//test admin login
	private static void login(String website) throws InterruptedException {
		WebDriver driver = new ChromeDriver();
		driver.get(website);
		Thread.sleep(2000);
		driver.findElement(By.id("login_click")).click();
		
		driver.findElement(By.id("email")).sendKeys("boon@gmail.com"); //find element (can by: id,name,classname ... ) // sentKeys -> what u want to sent through
		Thread.sleep(1000);
		driver.findElement(By.id("password")).sendKeys("123456");
		Thread.sleep(1000);
		driver.findElement(By.id("submit")).click();
		Thread.sleep(5000); //delay 5 seconds
		driver.quit(); //exit web
	}
	
	private static void register(String website) throws InterruptedException {
		
		
	
		String username = getUserName();
		
		
		WebDriver driver = new ChromeDriver(); //must have 
		driver.get(website);
		Thread.sleep(1000); 
		
		driver.findElement(By.id("register_click")).click();
		
		driver.findElement(By.id("username")).sendKeys(getUserName());
		Thread.sleep(1000); 
		
		driver.findElement(By.id("email")).sendKeys(getSaltString()+"@gmail.com");
		Thread.sleep(1000); 
		
		driver.findElement(By.id("password")).sendKeys("123456");
		Thread.sleep(1000); 
		
		driver.findElement(By.id("confirmpassword")).sendKeys("123456");
		Thread.sleep(1000); 
		
		driver.findElement(By.id("submit")).click();
		Thread.sleep(5000); 
		
		driver.quit(); //exit website
		
	}
	
}
