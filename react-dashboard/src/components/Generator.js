import React, { useState } from "react";

export default function Generator() {
  const [prompt, setPrompt] = useState("");
  const [result, setResult] = useState("");

  const generate = async () => {
    const res = await fetch("http://localhost/wp-json/ai/v1/generate", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify({ prompt }),
    });

    const data = await res.json();
    setResult(data.result);
  };

  return (
    <div>
      <textarea
        style={{ width: "100%", height: "100px" }}
        onChange={(e) => setPrompt(e.target.value)}
      />
      <br /><br />
      <button onClick={generate}>Generate</button>
      <p>{result}</p>
    </div>
  );
}
