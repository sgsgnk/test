using System;
public class Hello{
    public static void Main(){
        // 自分の得意な言語で
        // Let's チャレンジ！！
        var a = System.Console.ReadLine();
        int n = a.Length;
        int counter;
        
        for(counter=0; counter<n; counter+=2)
        {
            System.Console.Write(a.Substring(counter, 1));
        }
    }
}

//クリアできました